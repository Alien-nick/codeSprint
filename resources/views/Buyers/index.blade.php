@extends('templates/header')



    @section('content')

        @foreach($demands as $demand)

            <h4 style="color:white;">Crop in Demand: {{$demand->crop_type}}</h4>
            <h4 style="color:white;">Due Date: {{$demand->end_date_of_order}}</h4>
            <a name="view" href="/Buyers/{{$demand->id}}" class="btn btn-success">View</a>
            <input type="submit" name="bid" value="bid" class="btn btn-primary"> <hr>

        @endforeach
        {{$demands->links()}}

    @endsection
