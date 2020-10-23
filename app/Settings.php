<?php

namespace App;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
     use Translatable;
     public $translatedAttributes =  ['site_name','adress','description','keywords','message_maintenance','head_office'];
    protected $guarded =[];

}
