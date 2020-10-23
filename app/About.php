<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
class About extends Model  implements TranslatableContract
{
    use Translatable;
    public $translatedAttributes = ['title','sub_title','freelance','degree','desc','address'];
    protected $guarded =[];
    public function users()
    {
        return $this->morphToMany(\App\User::class, 'userable');
    }

}
