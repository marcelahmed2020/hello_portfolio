<?php

use App\Orders;
use App\ShopingWishlist;

if (! function_exists('aurl')) {
    function aurl($aurl = null)
    {
        return url('admin/'.$aurl);
    }
}
if (! function_exists('sitesetting')) {
    function sitesetting()
    {
        return  \App\Settings::latest()->first();
    }
}
if (! function_exists('lang_list')) {
    function lang_list()
    {
        return  \App\Languages::where('lang_enable','1')->get();
    }
}
if (! function_exists('pages_role')) {
    function pages_role($val)
    {
        return  \App\PagesRole::where('name',$val)->first();
    }
}
if (! function_exists('carts')) {
    function carts()
    {
        $sessionID = \Session::get('session_id');
        if (! isset($sessionID)){
            $sessionID = \Str::random(50);
            \Session::put('session_id',$sessionID);
        }
        if (auth()->check()){
            $carts = \App\ShopingCart::where('user_id',auth()->user()->id)->get();
        }else{
            $carts = \App\ShopingCart::where('session_id',$sessionID)->get();
        }
        return $carts;
    }
}
if (! function_exists('wishlist')) {
    function wishlist()
    {
        $sessionID = \Session::get('session_id');
        if (! isset($sessionID)){
            $sessionID = \Str::random(50);
            \Session::put('session_id',$sessionID);
        }
        if (auth()->check()){
            $wishlist = \App\ShopingWishlist::where('user_id',auth()->user()->id)->get();
        }else{
            $wishlist = \App\ShopingWishlist::where('session_id',$sessionID)->get();
        }
        return $wishlist;
    }
}
if (! function_exists('OrdersTime')) {
    function OrdersTime($val)
    {
        return  Orders::findOrFail($val);
    }
}

