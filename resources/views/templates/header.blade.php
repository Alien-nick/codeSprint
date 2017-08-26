<!DOCTYPE html>
<html>
    <head>
        <title>Farmer's Paradise</title>
          <meta name="viewport" content="width=device-width, initial-scale=1">
          @include('templates.css')
  </head>
    <body>
        @include('templates.nav')

        <div class="container theme-showcase" role="main">

            @yield('content')

              <hr>


        </div> <!-- /container -->

      @include('templates.scripts')


</body>
</html>
