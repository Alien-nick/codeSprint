@extends('templates.header')

@section('content')


	{!! Form::open(['action' => 'BuyersController@store', 'method' => 'POST']) !!}
  <div class="container">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
 <div class="col-lg-6 col-lg-offset-3 animated pulse">
   <div class="panel" style="padding:25px 20px 50px 25px; opacity:0.9 ;">

 <div class="panel panel-heading">
   <h1 class="animated bounceInDown" style="color:white; text-align:center;"> Create new Demand<h1>
 </div>
<h4> Crop Name: </h4>
<input class="form-control" type="text" name="crop_type" placeholder="Crop Name">


 <br>

 <div class="row">

 <div class="col-lg-3">
 <h4> Quantity: </h4>
 <input class="form-control" type="number" name="order_quantity" placeholder="Quantity">
 <br>
 </div>
</div>

 <h4> Start Date: </h4>
 <input class="form-control" type="date" name="start_date_of_order"> </textarea>
 <br>

 <h4> End Date: </h4>
 <input class="form-control"  type="date" name="end_date_of_order"> </textarea>
 <br>
<!-- {{Form::submit('create Demand', ['class' => 'btn btn-primary', 'name' => 'create_demands'])}} -->
<input type="submit" name="submit" value="Create Demand">
 </div>
 </div>
 </div>
  {!! Form::close() !!}
@endsection
