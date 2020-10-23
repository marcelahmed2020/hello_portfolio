<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    protected $fillable = ['name','email','address','phone',];
    public function users()
    {
        return $this->morphToMany(\App\User::class, 'userable');
    }
}
