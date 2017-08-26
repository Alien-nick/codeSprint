<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buyers extends Model
{
    public $timestamps = false;

    protected $fillable = [
                          'id',
                          'order_quantity',
                          'crop_type',
                          'start_date_of_order',
                          'end_date_of_order',];

    protected $table = 'demands';
}
