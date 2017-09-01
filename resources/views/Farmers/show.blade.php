@extends('templates.header')

    @section('content')

      <h2 style="color:white;">{{ $inStocks->crop_name}}</h2>
      <h3 style="color:white;">{{ $inStocks->crop_cost_per_lb}}</h3>
      <h4 style="color:white;">{{ $inStocks->crop_produce_date}}</h4>
      <h5 style="color:white;">{{ $inStocks->crop_quantity}}</h5>
      <h5 style="color:white;">{{ $inStocks->crop_estimate_reap_date}}</h5>
      <a href="/Farmers/{{$inStocks->id}}/edit" class="btn btn-success">Edit</a> <br>
      <form class="form" role="form" method="delete" action="{{ url('/Farmers/'. $inStocks->id) }}">
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
