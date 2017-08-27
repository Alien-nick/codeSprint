@extends('templates.header')

    @section('content')

      <h2 style="color:white;">{{ $buyers->crop_type}}</h2>
      <h3 style="color:white;">{{ $buyers->order_quantity}}</h3>
      <h4 style="color:white;">{{ $buyers->end_date_of_order}}</h4>
      <h5 style="color:white;">created by: {{ $buyers->user->name}}</h5>
      <h5 style="color:white;">{{ $buyers->order_status}}</h5>
      @if(auth()->id() == $buyers->user_id)
      <a href="/Buyers/{{$buyers->id}}/edit" class="btn btn-success">Edit</a> <br>
      <form class="form" role="form" method="delete" action="{{ url('/Buyers/'. $buyers->id) }}">
                          <input type="hidden" name="_method" value="delete">
                          {{ csrf_field() }}
      <input type="submit" onclick="return confirmDelete()" name="delete" value="Delete" class="btn btn-danger">
    </form>
    @endif

    <div class="comments">
            <ul class="list-group">
              @foreach($buyers->comments as $comment)
              @if(auth()->id() == $comment->user_id)
              <small><a href="#" class="btn btn-primary">Edit</a></small>
              <small><a href="#" class="btn btn-danger">Delete</a></small>
              @endif
                <li class="list-group-item"><h4><u style="color:blue;">{{$comment->user->name}}</u></h4></li>
                <li class="list-group-item">{{$comment->body}} <br> created on {{$comment->created_at}}</li> <br>

              @endforeach
            </ul>
    </div>



<hr>
    <div class="card">
          <div class="card-block">
                <form class="form-group" action="/Buyers/{{$buyers->id}}/comments" method="post">
                  {{csrf_field()}}
                      <textarea name="body" placeholder="Your Comment Here" class="form-control" rows="4" columns="75"></textarea>
                      <br>
                      <input type="submit" name="submit" value="Post Comment" class=" btn btn-primary">
                </form>
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
