@extends('templates.header')

  @section('content')

  <div class="col-sm-8">
      <h1>Sign In</h1>
      <form action="/Farmers/signIn" method="post">
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
                  <input class="btn btn-primary" type="submit" name="submit" id="submit" value="login">
            </div>
      @include('templates.errors')
          </form>
          </div>
  @endsection
