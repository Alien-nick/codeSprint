@extends('templates.header')

  @section('content')

  <div class="col-lg-4 col-lg-offset-4">


      <div class="panel panel-default" style="padding: 25px 25px 70px 25px;">
        <h1 style="text-align:center" class="animated pulse">Sign In as Buyer</h1>
      <form action="/Buyers/signIn" method="post">
            {{csrf_field()}}
            <div class="form-group">
                  <label for="Name">Email</label>
                  <input class="form-control" type="email" name="email" id="name">
            </div>
            <div class="form-group">
                  <label for="password">Password</label>
                  <input class="form-control" type="password" name="password" id="password">
            </div>
            <div class="form-group">
                  <input class="btn btn-custom" type="submit" name="submit" id="submit" value="login">
            </div>
        @include('templates.errors')
          </form>
        </div>
          </div>
  @endsection
