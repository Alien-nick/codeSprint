@extends('templates.header')

    @section('content')



      <div class="container">
        <div class="panel panel-default" style="padding:25px;">


    <div class="jumbotron">
      <div class="row">

      <div class="col-lg-11">


      <h2>{{ $buyers->crop_type}}</h2> <br>
      <h3>{{ $buyers->order_quantity}}</h3>
      <h4>{{ $buyers->end_date_of_order}}</h4>
      <h5>created by: {{ $buyers->user->name}}</h5>
      <h5>{{ $buyers->order_status}}</h5>
      </div>
      <div class="col-lg-1">
        <form class="" action="/Bids/{{$buyers->id}}/create/" method="post">
             <input type="hidden" name="_token" value="{{ csrf_token() }}">
             {!! csrf_field() !!}
               <input type="submit" name="bid" value="Bid" class="btn btn-danger pull-left">
           </form>
      </div>

    </div>
  </div>
      <br>

      @if(Auth::user()->adminOrCurrentUserOwns($buyers))

      <a href="/Buyers/{{$buyers->id}}/edit" class="btn btn-success">Edit</a>

      <form style="padding-top:5px;" class="form" role="form" method="delete" action="{{ url('/Buyers/'. $buyers->id) }}">
      <input type="hidden" name="_method" value="delete">
      {{ csrf_field() }}
      <input type="submit" onclick="return confirmDelete()" name="delete" value="Delete" class="btn btn-danger">
      </form>
    @endif

    <div class="comments">
            <ul class="list-group" style="padding:20px; background:#555; border-radius:10px;">
              <h2 style="color:white;">Comments:</h2>
              @foreach($buyers->comments as $comment)

                <li class="list-group-item"><h4><u style="color:blue;">{{$comment->user->name}}</u></h4></li>
                <li class="list-group-item">{{$comment->body}} <br> created on {{$comment->created_at}}

                  <br><br><br>
                  @if(auth()->id() == $comment->user_id)
                  <small><a href="#" class="btn btn-primary">Edit</a></small>
                  <small><a href="#" class="btn btn-danger">Delete</a></small>
                  @endif

                </li> <br>




              @endforeach
            </ul>

    </div>
    <br> <br>
    </div>



<hr>
<div class="panel panel-default" style="padding:10px;">
  <div class="container">


  <h3>Leave a comment:</h3>


    <div class="card" style="padding:15px;">
          <div class="card-block">
                <form class="form-group" action="/Buyers/{{$buyers->id}}/comments" method="post">
                  {{csrf_field()}}
                      <textarea name="body" placeholder="Your Comment Here" class="form-control" rows="4" columns="75"></textarea>
                      <br>
                      <input type="submit" name="submit" value="Post Comment" class=" btn btn-primary">
                </form>
              </div>


</div>
</div>
</div>
    @endsection

<script type="text/javascript">
        function confirmDelete()
        {
          var x = confirm('Are you sure you want to delete?');

          if(x){
            return true;
          }
          else{
            return false;
          }
        }
</script>
