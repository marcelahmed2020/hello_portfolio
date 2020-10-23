<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicesTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['title','desc'];
    protected $guarded =[];

}
