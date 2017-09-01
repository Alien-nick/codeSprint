<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Buyers;
use App\User;

class Comments extends Model
{
    protected $fillable = ['body', 'buyers_id', 'user_id'];

    public function demands()
    {
      return $this->belongsTo(Buyers::class);
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }


}
