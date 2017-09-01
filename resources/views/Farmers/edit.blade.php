@extends('templates.header')

  @section('content')
<div class="container">



    <ol class='breadcrumb'>
        <li><a href='/'>Home</a></li>
        <li><a href='/Farmers'>Crops</a></li>
        <li><a href='/Farmers/{{$inStocks->id}}'>{{$inStocks->crop_name}}</a></li>
        <li class='active'>Edit</li>
    </ol>

      <div class="panel panel-default" style="padding:25px;">

    <h1>Edit Demands</h1>

    <hr/>


    <form class="form" role="form" method="post" action="/Farmers/{{$inStocks->id}}">

        {{ csrf_field() }}

    <!-- crop_name Form Input -->
        <div class="form-group{{ $errors->has('crop_name') ? ' has-error' : '' }}">
            <label class="control-label">Crop Name</label>

            <input type="text" class="form-control" name="crop_type" value="{{ $inStocks->crop_name }}">

            @if ($errors->has('crop_name'))
                <span class="help-block">
                                        <strong>{{ $errors->first('crop_name') }}</strong>
                                    </span>
            @endif

        </div>

        <div class="form-group{{ $errors->has('order_quantity') ? ' has-error' : '' }}">
            <label class="control-label">Order Quantity</label>

            <input type="number" class="form-control" name="order_quantity" value="{{ $inStocks->crop_quantity }}">

            @if ($errors->has('crop_quantity'))
                <span class="help-block">
                                        <strong>{{ $errors->first('crop_quantity') }}</strong>
                                    </span>
            @endif

        </div>

        <div class="form-group{{ $errors->has('crop_estimate_reap_date') ? ' has-error' : '' }}">
            <label class="control-label">Crop Estimate Reap Date</label>

            <input type="date" class="form-control" name="end_date_of_order" value="{{ $inStocks->crop_estimate_reap_date }}">

            @if ($errors->has('crop_estimate_reap_date'))
                <span class="help-block">
                                        <strong>{{ $errors->first('crop_estimate_reap_date') }}</strong>
                                    </span>
            @endif

        </div>
        <!-- <div class="form-group{{ $errors->has('order_status') ? ' has-error' : '' }}">
            <label style="color:white;" class="control-label">Order Status</label>

            <input type="text" class="form-control" name="order_status" value="">

            @if ($errors->has('order_status'))
                <span class="help-block">
                                        <strong>{{ $errors->first('order_status') }}</strong>
                                    </span>
            @endif

        </div> -->

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">
                Update
            </button>
        </div>

    </form>
    </div>
    </div>


@endsection
