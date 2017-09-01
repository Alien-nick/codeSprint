<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{
    public function edit_profile()
    {
      return view('Profile.User_profile');
    }
}
