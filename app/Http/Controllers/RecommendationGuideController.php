<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\TourGuide;

class RecommendationGuideController extends Controller
{
    public function generateRecommendations($userId, $k)
    {
        $neighbors = $this->getNearestNeighbors($userId, $k);

        $user = User::find($userId);
        $items = TourGuide::all();

        $recommendations = [];

        foreach ($items as $item) {
            $rating = $user->ratings->where('guides_id', $item->id)->first();

            if (!$rating) {
                $prediction = $this->predictUserPreference($userId, $item->id, $neighbors);

                if ($prediction) {
                    $recommendations[] = [
                        'guides_id' => $item->id,
                        'prediction' => $prediction
                    ];
                }
            }
        }

        usort($recommendations, function ($a, $b) {
            return $b['prediction'] <=> $a['prediction'];
        });

        $guidesIds = array_column($recommendations, 'guides_id');
        $guides = TourGuide::findOrFail($guidesIds);

        return $guides;
    }

    private function getNearestNeighbors($userId, $k)
    {
        $user = User::find($userId);
        $users = User::where('id', '<>', $userId)->get();

        $neighbors = [];
        $userRatings = $user->ratings->pluck('rating')->toArray();


        foreach ($users as $otherUser) {
            $userRatings = $user->ratings->pluck('rating')->toArray();
            $otherUserRatings = $otherUser->ratings->pluck('rating')->toArray();

            // Pastikan vektor rating pengguna memiliki minimal 2 elemen untuk perhitungan
            if (count($userRatings) >= 2 && count($otherUserRatings) >= 2) {
                $similarity = $this->pearsonCorrelation($userRatings, $otherUserRatings);
                $neighbors[$otherUser->id] = $similarity;
            }
        }
        arsort($neighbors);

        return array_slice($neighbors, 0, $k, true);
    }

    private function cosineSimilarity($vectorA, $vectorB)
    {
        $dotProduct = array_sum(array_map(function ($a, $b) {
            return $a * $b;
        }, $vectorA, $vectorB));

        $magnitudeA = sqrt(array_sum(array_map(function ($a) {
            return $a * $a;
        }, $vectorA)));

        $magnitudeB = sqrt(array_sum(array_map(function ($b) {
            return $b * $b;
        }, $vectorB)));

        if ($dotProduct != 0) {
            return $dotProduct / ($magnitudeA * $magnitudeB);
        }
        return 1;
    }

    private function predictUserPreference($userId, $itemId, $neighbors)
    {
        $user = User::find($userId);
        $item = TourGuide::find($itemId);

        $totalSimilarity = 0;
        $weightedSum = 0;

        foreach ($neighbors as $neighborId => $similarity) {
            $neighbor = User::find($neighborId);
            $rating = $neighbor->ratings->where('guides_id', $itemId)->first();

            if ($rating) {
                $totalSimilarity += $similarity;
                $weightedSum += $similarity * $rating->rating;
            }
        }

        if ($totalSimilarity > 0) {
            $prediction = $weightedSum / $totalSimilarity;
            return $prediction;
        }

        return null;
    }
}
