@extends('templates.header')

  @section('content')
  <form class="form-group" action="/Buyers/register" method="post">

      {{csrf_field()}}
    <div class="col-lg-4 col-lg-offset-4">
    <div class="panel panel-custom animated pulse" style="padding:25px 20px 80px 20px; opacity:0.9;">

        <div class="panel-heading">
            <h2 class="animated bounceInDown" style="color:white; text-align:center;"> Register New Buyer Account </h2>
        </div>


<div class="panel-body">

<h4>Username</h4>
<input class="form-control"  type="text" name="name" value="" size="50" />

<h4>Address</h4>
<input class="form-control"  type="text" name="address" value="" size="50" />

<h4>Contact</h4>
<input class="form-control"  type="number" name="contact" value="" size="50" />

<h4>Email Address</h4>
<input class="form-control" type="text" name="email" value="" size="50" />

<h4>Password</h4>
<input class="form-control"  type="text" name="password" value="" size="50" />
<br><br>
<div><input class="btn-block btn btn-custom"  type="submit" value="Submit" /></div>
</div>


</div>
    </div>


</form>
    @include('templates.errors')

@endsection
