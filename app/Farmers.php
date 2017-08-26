<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Farmers extends Model
{
    public $timestamps = false;

    protected $table = 'crops';

    protected $fillable = ['crop_name',
                           'crop_price_per_lb',
                           'crop_image',
                           'crop_produce_date',
                           'crop_estimate_reap_date',
                           'crop_quantity',
                           'crop_user_id'
                         ];
}
