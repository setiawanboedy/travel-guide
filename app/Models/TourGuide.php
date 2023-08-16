<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use MMedia\LaravelCollaborativeFiltering\HasCollaborativeFiltering;
use Database\Factories\TourFactory;

class TourGuide extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasCollaborativeFiltering;

    protected $fillable = [
        'travel_packages_id',
        'rating_count',
        'name',
        'slug',
        'image',
        'location',
        'transportation',
        'days',
        'price',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
    ];
    protected static function newFactory()
    {
        return TourFactory::new();
    }

    /**
     * Get all of the ratings for the TourGuide
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ratings()
    {
        return $this->hasMany(GuideRating::class, 'guides_id', 'id');
    }

    public function travel_package()
    {
        return $this->belongsTo(TravelPackage::class,'travel_packages_id', 'id');
    }

    public function relatedThroughRatings()
    {
        return $this->hasManyRelatedThrough(GuideRating::class, 'users_id');
    }


}
