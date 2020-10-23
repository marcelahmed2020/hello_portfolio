<?php

namespace App;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Portfolios extends Model
{
    use Translatable;
    public $translatedAttributes = ['title'];
    protected $guarded =[];
    public function users()
    {
        return $this->morphToMany(\App\User::class, 'userable');
    }
}
