<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExperienceTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['title','sub_title','from','to','desc1','desc2','desc3'];
    protected $guarded =[];

}
