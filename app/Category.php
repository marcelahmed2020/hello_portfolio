<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
class Category extends Model  implements TranslatableContract
{
  use Translatable;

    // public $translatedAttributes = [''];
    public $translatedAttributes = ['name'];
   // protected $fillable = [''];
    public function users()
    {
        return $this->morphToMany(\App\User::class, 'userable');
    }
    public function products()
    {
        return $this->hasMany(Product::class);

    }//end of products
}
