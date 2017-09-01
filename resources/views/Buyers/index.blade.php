@extends('templates/header')



    @section('content')

    <h1 style="text-align:center; color:white;"> Crops in Demand: </h1>
      <br>
        @foreach($demands as $demand)

        <div class="container">
          <div class=container>


          <div class="row">
            <div class="col-sm-*">
              <div class="panel panel-default" style="padding:10px;">


            <div class="panel-heading">
                <h2 style="text-align:">{{$demand->crop_type}}</h2>
            </div>

            <div class="panel-body">
            <h4>Due Date: {{$demand->end_date_of_order}}</h4>
            <br>
            <a name="view" href="/Buyers/{{$demand->id}}" class="btn btn-success">View</a>
              <!-- <a href="Bids/{{$demand->id}}/create" class="btn btn-primary">Bid</a> <hr> -->
            <form action="/Bids/{{$demand->id}}/create/" method="post">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              {!! csrf_field() !!}
                <!-- <input type="submit" name="bid" value="Bid" class="btn btn-danger"> -->
            </form>
            </div>



            </div>
          </div>
              </div>
              </div>
              </div>

        @endforeach
        {{$demands->links()}}

    @endsection
