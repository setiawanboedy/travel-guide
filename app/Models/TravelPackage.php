<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Gallery;

class TravelPackage extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'location',
        'about',
        'featured_event',
        'language',
        'foods',
        'departure_date',
        'duration',
        'type',
        'price',
       ];

    protected $hidden = [];

    public function travel_galleries(){
        return $this->hasMany(Gallery::class, 'travel_packages_id', 'id');
    }

    public function tour_guides()
    {
        return $this->hasMany(TourGuide::class, 'travel_packages_id', 'id');
    }
}
