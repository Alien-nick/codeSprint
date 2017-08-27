<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Buyers;
use App\Farmers;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'status', 'contact', 'address',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function demands()
    {
      return  $this->hasMany(Buyers::class);
    }

    public function crops()
    {
      return $this->hasMany(Farmers::class);
    }

    public function comments()
    {
      return $this->hasMany(Comments::class);
    }
}
