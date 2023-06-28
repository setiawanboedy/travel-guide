<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\TravelPackage;
use Database\Factories\GalleryFactory;

class Gallery extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'travel_packages_id',
        'image'
       ];

    protected $hidden = [];
    protected static function newFactory()
{
    return GalleryFactory::new();
}
    /**
     * Get the travel_package that owns the Gallery
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function travel_package()
    {
        return $this->belongsTo(TravelPackage::class,'travel_packages_id', 'id');
    }
}
