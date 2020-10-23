<?php
namespace App;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;
class User extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;
    protected $appends = ['user_image'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password','min_image','max_image'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token',];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = ['email_verified_at' => 'datetime', ];
    public function getUserImageAttribute()
    {
        return  ! empty($this->image)?$this->image:'default.png';
    } /**Get the User's Image.**/
    public function getNameAttribute($value)
    {
        return  ucfirst($value);
    }
    public function users()
    {
        return $this->morphedByMany(\App\User::class, 'userable');
    }/**Get the User's Users.**/
    public function editor()
    {
        return $this->belongsTo(\App\User::class, 'edit');
    }
    public function deleted_by()
    {
        return $this->belongsTo(\App\User::class, 'delete');
    }

    public function aboutus()
    {
        return $this->morphedByMany(\App\About::class, 'userable');
    } /**Get the User's category.**/

 public function price()
    {
        return $this->morphedByMany(\App\Price::class, 'userable');
    } /**Get the User's category.**/

 public function service()
    {
        return $this->morphedByMany(\App\Services::class, 'userable');
    } /**Get the User's category.**/

 public function portfolios()
    {
        return $this->morphedByMany(\App\Portfolios::class, 'userable');
    } /**Get the User's category.**/

public function education()
    {
        return $this->morphedByMany(\App\Education::class, 'userable');
    } /**Get the User's category.**/

public function professional_experiences()
    {
        return $this->morphedByMany(\App\Experience::class, 'userable');
    } /**Get the User's category.**/



}
