@extends('templates.header')

  @section('content')

<div class="container">


    <ol class='breadcrumb'>
        <li><a href='/'>Home</a></li>
        <li><a href='/Buyers'>Demands</a></li>
        <li><a href='/Buyers/{{$demands->id}}'>{{$demands->crop_type}}</a></li>
        <li class='active'>Edit</li>
    </ol>

    <div class="panel panel-default" style="padding:25px;">


    <h1>Edit Demand</h1>

    <hr/>


    <form class="form" role="form" method="post" action="/Buyers/{{$demands->id}}">

        {{ csrf_field() }}

    <!-- crop_name Form Input -->
        <div class="form-group{{ $errors->has('crop_type') ? ' has-error' : '' }}">
            <label class="control-label">Crop Name</label>

            <input type="text" class="form-control" name="crop_type" value="{{ $demands->crop_type }}">

            @if ($errors->has('crop_type'))
                <span class="help-block">
                                        <strong>{{ $errors->first('crop_type') }}</strong>
                                    </span>
            @endif

        </div>

        <div class="form-group{{ $errors->has('order_quantity') ? ' has-error' : '' }}">
            <label class="control-label">Order Quantity</label>

            <input type="number" class="form-control" name="order_quantity" value="{{ $demands->order_quantity }}">

            @if ($errors->has('order_quantity'))
                <span class="help-block">
                                        <strong>{{ $errors->first('order_quantity') }}</strong>
                                    </span>
            @endif

        </div>

        <div class="form-group{{ $errors->has('end_date_of_order') ? ' has-error' : '' }}">
            <label class="control-label">Due Date</label>

            <input type="date" class="form-control" name="end_date_of_order" value="{{ $demands->end_date_of_order }}">

            @if ($errors->has('order_quantity'))
                <span class="help-block">
                                        <strong>{{ $errors->first('end_date_of_order') }}</strong>
                                    </span>
            @endif

        </div>
        <div class="form-group{{ $errors->has('order_status') ? ' has-error' : '' }}">
            <label class="control-label">Order Status</label>

            <input type="text" class="form-control" name="order_status" value="{{ $demands->order_status}}">

            @if ($errors->has('order_status'))
                <span class="help-block">
                                        <strong>{{ $errors->first('order_status') }}</strong>
                                    </span>
            @endif

        </div>
<br>
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg">
                Update
            </button>
        </div>

    </form>

</div>
</div>
@endsection
