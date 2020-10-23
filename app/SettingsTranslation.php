<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SettingsTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['site_name','adress','description','keywords','message_maintenance','head_office'];
    protected $guarded =[];
}
