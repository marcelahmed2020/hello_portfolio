<?php

namespace App;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Services  extends Model  implements TranslatableContract
{
    use Translatable;
    public $translatedAttributes = ['title','desc'];
    protected $guarded =[];
    public function users()
    {
        return $this->morphToMany(\App\User::class, 'userable');
    }

}
