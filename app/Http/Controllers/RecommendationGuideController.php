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

    private function pearsonCorrelation($vectorA, $vectorB)
    {
        $n = count($vectorA);
        if ($n === 0) {
            return 0;
        }

        $meanA = array_sum($vectorA) / $n;
        $meanB = array_sum($vectorB) / $n;

        $numerator = $denominatorA = $denominatorB = 0;

        for ($i = 0; $i < $n; $i++) {
            $devA = $vectorA[$i] - $meanA;
            $devB = $vectorB[$i] - $meanB;

            $numerator += $devA * $devB;
            $denominatorA += pow($devA, 2);
            $denominatorB += pow($devB, 2);
        }

        $denominator = sqrt($denominatorA) * sqrt($denominatorB);

        if ($denominator === 0) {
            return 0;
        }


        return $numerator / $denominator;

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
