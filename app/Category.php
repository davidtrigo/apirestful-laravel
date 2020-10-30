<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\Product;
class Category extends Model
{
    protected $fillable=[
        'name',
        'description',
    ];

    public function products()
    {
        return $this->belongToMany(Product::class);
    }
}
