<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait; // add this trait to your user model

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','lastname', 'mobile', 'email', 'password','type_user', 'agency_name'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     *
     * Boot the model.
     *
     */
    public static function boot(){
        parent::boot();

        static::creating(function ($user) {
           $user->token = str_random(40);
        });
    }

    public function hasVerified()
    {
        $this->verified = true;
        $this->token = null;

        $this->save();
    }

    public function offers()
    {
        return $this->hasMany('App\Offer');
    }

}
