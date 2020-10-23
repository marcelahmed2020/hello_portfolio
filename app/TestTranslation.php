<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestTranslation extends Model
{
  public $timestamps = false;
  protected $fillable  = ['name','desc'];
}
