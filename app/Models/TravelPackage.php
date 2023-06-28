<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Gallery;
use Database\Factories\TravelFactory;

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

    protected static function newFactory()
{
    return TravelFactory::new();
}

    public function travel_galleries(){
        return $this->hasMany(Gallery::class, 'travel_packages_id', 'id');
    }
}
