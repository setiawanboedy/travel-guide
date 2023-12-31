<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\TransactionDetail;
use App\Models\TravelPackage;

class Transaction extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'travel_packages_id',
        'guide_packages_id',
        'users_id',
        'image',
        'transaction_total',
        'transaction_status'
       ];

    protected $hidden = [];

    public function transaction_details(){
        return $this->hasMany(TransactionDetail::class,'transactions_id','id');
    }

    public function travel_package()
    {
        return $this->belongsTo(TravelPackage::class,'travel_packages_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'users_id', 'id');
    }

    public function guide_package()
    {
        return $this->belongsTo(TourGuide::class,'guide_packages_id', 'id');
    }
}
