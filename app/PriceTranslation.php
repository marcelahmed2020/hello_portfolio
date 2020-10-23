<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PriceTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['title','sub_title','desc1','desc2','desc3','footer_desc'];

}
