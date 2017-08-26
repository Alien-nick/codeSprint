@extends('templates.header')

    @section('content')

      <h2 style="color:white;">{{ $buyers->crop_type}}</h2>
      <h3 style="color:white;">{{ $buyers->order_quantity}}</h3>
      <h4 style="color:white;">{{ $buyers->end_date_of_order}}</h4>
      <h5 style="color:white;">{{ $buyers->order_status}}</h5>
      <a href="/Buyers/{{$buyers->id}}/edit" class="btn btn-success">Edit</a> <br>
      <form class="form" role="form" method="delete" action="{{ url('/Buyers/'. $buyers->id) }}">
                          <input type="hidden" name="_method" value="delete">
                          {{ csrf_field() }}
      <input type="submit" onclick="return confirmDelete()" name="delete" value="Delete" class="btn btn-danger">
    </form>
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
