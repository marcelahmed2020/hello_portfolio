<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $guarded = [];
    protected $appends = 's';
    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function products()
    {
//        return $this->belongsToMany(Product::class,'product_order');
        return $this->belongsToMany('App\Product', 'product_order', 'order_id', 'product_id');
//        return $this->belongsToMany('App\Product', 'product_order', 'order_id', 'product_id');

    }
    public function productorder()
    {
        return $this->hasMany(ProductOrder::class, 'order_id');

    }

//ProductOrder

}

