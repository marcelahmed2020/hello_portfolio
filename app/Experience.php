<?php

namespace App;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use Translatable;
    protected $guarded =[];
    public $translatedAttributes = ['title','sub_title','desc1','desc2','desc3'];
    public function users()
    {
        return $this->morphToMany(\App\User::class, 'userable');
    }
}
