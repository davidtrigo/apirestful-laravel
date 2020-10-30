<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Seller;
use App\Buyer;
use App\Transaction;

class Product extends Model
{
    const AVAILABLE = 'available';
    const NOT_AVAILABLE='not available';

    protected $fillable=[
         'name',
         'description',
         'quantity',
         'status',
         'seller_id',
    ];


    public function seller()
    {
        return $this->belongsTo(Seller::class);

    }
    
    public function  transaction()
    {
        return $this->hasMany(Transaction::class);
    }

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

}
