<?php

namespace App;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use Translatable;
    public $translatedAttributes = ['title','sub_title','desc'];
    protected $guarded =[];
    public function users()
    {
        return $this->morphToMany(\App\User::class, 'userable');
    }
}
