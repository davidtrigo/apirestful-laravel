<?php

namespace App;

use App\Seller;
use App\Buyer;
use App\Transaction;
use App\Http\Resources\ProductResource;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    const AVAILABLE = 'available';
    const NOT_AVAILABLE='not available';

    public $resource = ProductResource::class;

    protected $fillable=[
         'name',
         'description',
         'quantity',
         'status',
         'seller_id',
    ];

    protected $hidden = [
        'pivot',
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
