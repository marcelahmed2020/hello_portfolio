<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
class Price extends Model  implements TranslatableContract
{
    use Translatable;
    public $translatedAttributes = ['title','sub_title','desc1','desc2','desc3','footer_desc'];
    protected $guarded =[];
    public function users()
    {
        return $this->morphToMany(\App\User::class, 'userable');
    }

}
