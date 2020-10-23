<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EducationTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['title','sub_title','from','to','desc'];

}
