<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Buyers;
use App\Farmers;
use App\User;
use App\Orders;

class Bids extends Model
{

    //public $timestamps = false;



    protected $fillable = ['user_id', 'order_id', 'demands_id', 'quantity'];

    protected $table = 'bids';

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function demands()
    {
      return $this->belongsTo(Buyers::class);
    }

    public function manyDemands()
    {
      return $this->hasMany(Buyers::class);
    }
}
