<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopingCart extends Model
{
    public function products()
    {
        return $this->belongsTo(Product::class,'product_id');

    }//end of products

}
