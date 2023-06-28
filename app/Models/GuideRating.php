<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\RatingFactory;
class GuideRating extends Model
{
    use HasFactory;

    protected $fillable = [
        'guides_id',
        'users_id',
        'rating',
        'username',
        'comment'
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
        return RatingFactory::new();
    }
    /**
     * Get the user that owns the GuideRating
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class,'users_id','id');
    }

    /**
     * Get the guide that owns the GuideRating
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function guide()
    {
        return $this->belongsTo(TourGuide::class, 'guides_id','id');
    }
}
