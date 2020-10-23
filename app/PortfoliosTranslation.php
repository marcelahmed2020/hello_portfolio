<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PortfoliosTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['title'];
    protected $guarded =[];

}
