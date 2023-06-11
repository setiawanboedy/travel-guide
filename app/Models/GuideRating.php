<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuideRating extends Model
{
    use HasFactory;

    protected $fillable = [
        'guides_id',
        'users_id',
        'rating'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
    ];

    /**
     * Get the user that owns the GuideRating
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'users_id','id');
    }

    /**
     * Get the guide that owns the GuideRating
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function guide(): BelongsTo
    {
        return $this->belongsTo(TourGuide::class, 'guides_id','id');
    }
}
