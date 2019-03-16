<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;


    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $fillable = ['first_name', 'last_name', 'password', 'email', 'stripe_id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';


    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'role_id' => 1,
        'payment_terms_id' => 1
    ];


    public function role()
    {
        return $this->hasOne(Role::class);
    }

    public function terms()
    {
        return $this->hasOne(PaymentTerm::class);
    }

    public function info()
    {
        return $this->hasMany(UserInfo::class);
    }

    public function payment()
    {
        return $this->hasMany(Payment::class);
    }

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }
}
