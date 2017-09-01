<?php

namespace App\Http\Controllers;

use App\Farmers;
use App\Buyers;
use App\User;
use App\Http\Controllers\BuyersController;
use Auth;
use Redirect;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function register_Farmer()
    {
      $this->validate(request(), [
          'name' => 'required',
          'email' => 'required|email',
          'password' => 'required|confirmed|min:6'
      ]);

      $buyer = User::create([
        'name' => request('name'),
        'email' => request('email'),
        'address' => request('address'),
        'contact' => request('contact'),
        'status' => 'f',
        'password' => bcrypt(request('password'))
      ]);

      alert()->success('Congrats!', 'You successfully Register as a Farmer');
      return redirect('Farmers/login');

    }

    public function register_Buyer()
    {

      $this->validate(request(), [
          'name' => 'required',
          'email' => 'required|email',
          'password' => 'required|min:6'
      ]);

      $buyer = User::create([
        'name' => request('name'),
        'email' => request('email'),
        'address' => request('address'),
        'contact' => request('contact'),
        'status' => 'b',
        'password' => bcrypt(request('password')),
        'client_ip' => request()->ip(),
      ]);
      //redirect to homepage.
      alert()->success('Congrats!', 'You successfully Register as a Buyer');
      return redirect('Buyers/login');

    }

    public function signIn_buyers()
    {

    $demands = new BuyersController;

      if (!auth()->attempt(request(['email', 'password']))) {
             return back()->withErrors([
               'message' => 'Please check your credentials and try again'
             ]);
      return view('Buyers.login');
    }
    //return $demands->index();
    return redirect('Buyers/');
    }

    public function signIn_Farmers()
    {

    $demands = new BuyersController;

      if (!auth()->attempt(request(['email', 'password']))) {
             return back()->withErrors([
               'message' => 'Please check your credentials and try again'
             ]);
      return view('Buyers.login');
    }
    return $demands->index();
    }

    public function logout()
    {
      Auth::logout();
      return redirect('/');
    }

    public function loginBuyer()
    {
      return view('Buyers.login');
    }

    public function create_buyer()
    {
      return view('Buyers.register');
    }

    public function loginFarmer()
    {
      return view('Farmers.login');
    }

    public function create_Farmer()
    {
      return view('Farmers.register');
    }


}
