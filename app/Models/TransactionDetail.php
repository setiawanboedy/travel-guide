<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionDetail extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'transactions_id',
        'username',
        'nationality'
       ];

    protected $hidden = [];

    public function transaction(){
        return $this->belongsTo(Transaction::class,'transactions_id','id');
    }
}
