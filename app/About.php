<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $guarded = [];
    protected $table = 'abouts';
    protected $fillable = [
'freelance','title','birthday',
'degree','age','phone','website',
'sub_title',
'desc',
'image',];
}
