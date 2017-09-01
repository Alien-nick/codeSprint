<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Bids;

class Buyers extends Model
{
    public $timestamps = false;

    protected $fillable = [
                          'id',
                          'order_quantity',
                          'crop_type',
                          'start_date_of_order',
                          'end_date_of_order',
                          'user_id',

                        ];

    protected $table = 'demands';

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function comments()
    {
      return $this->hasMany(Comments::class);
    }

    public function Bids()
    {
      return $this->hasMany(Bids::class);
    }

}
