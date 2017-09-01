<?php

namespace App;

use App\Notifications\BidToDemands;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Http\AuthTraits\OwnsRecord;
use App\Buyers;
use App\Farmers;
use App\Bids;
use App\Orders;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'status', 'contact', 'address','is_admin', 'status_id', 'client_ip',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //A User can have many Demands
    public function demands()
    {
      return  $this->hasMany(Buyers::class);
    }

    //A User can have many Crops
    public function crops()
    {
      return $this->hasMany(Farmers::class);
    }
    //A User can have many Comments
    public function comments()
    {
      return $this->hasMany(Comments::class);
    }
    //A user can have many Bids
    public function Bids()
    {
      return $this->hasMany(BidToDemands::class);
    }
    //A user can have many orders
    public function Orders()
    {
      return $this->hasMany(Orders::class);
    }


    //If Authenticated user is not admin, Current Users own May Own A record
    public function adminOrCurrentUserOwns($record)
    {
      if(Auth::user()->is_admin == 1)
      {
        return true;
      }
      return $record->user_id === Auth::id();
    }

    public function currentUserOwns($record)
    {
      return $record->user_id == Auth::id();
    }

}
