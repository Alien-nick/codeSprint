@extends('templates/header')



    @section('content')

        @foreach($demands as $demand)

          <div class="row">
            <div class="col-lg-4">
              <div class="panel panel-default" style="padding:10px;">



            <h4 style="color:white;">Crop in Demand: {{$demand->crop_type}}</h4>
            <h4 style="color:white;">Due Date: {{$demand->end_date_of_order}}</h4>
            <a name="view" href="/Buyers/{{$demand->id}}" class="btn btn-success">View</a>
              <!-- <a href="Bids/{{$demand->id}}/create" class="btn btn-primary">Bid</a> <hr> -->
            <form class="" action="/Bids/{{$demand->id}}/create/" method="post">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              {!! csrf_field() !!}
                <input type="submit" name="bid" value="Bid" class="btn btn-danger">
            </form>
            </div>
          </div>
              </div>

        @endforeach
        {{$demands->links()}}

    @endsection
