
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Bootstrap 4 CDN  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <!-- Local CSS FILES -->
    <link rel="stylesheet" href="/css/styles.scss" type="text/css" >
    <!-- <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css" /> -->
    <link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="/css/animate.css" type="text/css" />




    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Farmer's Paradise</title>

    <style type="text/css">

body
{
    background: #333;
    color: white;

}

#footer
{

    opacity:0.9;
    border-top: rgb(167,14,51) 4px solid;

    /*padding: 25px 0px 25px 0px;*/

}
.navbar
{
    border-bottom:rgb(167,14,51) 4px solid;
    opacity:0.7;
}
.card-temp
{
    background-color:rgba(157,14,57,0.7);
}

#home-section
{
    background:url('/images/cherryBG.png') no-repeat;
    min-height: 720px;
    background-size: cover;
    background-attachment: fixed;

}
.home-inner
{
    padding-top: 120px;
}

.dark-overlay
{
    background:rgba(0,0,0,0.5);
    min-height:720px;
    position: absolute;
    left:0;
    top:0;
    width:100%;

}
.btn:hover
{
    color:black;
}

.fa-size-40
{
    font-size: 40px;
    color:#f7afb6;
}
.img-res
{
    height: 220px;
    width: 220px;
}

.btn-inv:hover
{
color:white;

}

.pdelay1
{
    -webkit-animation-delay: 0.1s;
}
.pdelay2
{
    -webkit-animation-delay: 0.2s;
}
.pdelay3
{
    -webkit-animation-delay: 0.3s;
}
.pdelay4
{
    -webkit-animation-delay: 0.4s;
}

::-moz-selection { /* Code for Firefox */
    color: white;
    background: rgba(167,14,51,0.5);
    font-weight:bold;
}

::selection {
    color: white;
    background: rgba(167,14,51,0.5);
    font-weight:bold;
}

</style>


</head>

<body id="home">

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <div class="container">
            <a href="/" class="navbar-brand"> Farmer's Paradise</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link">Home</a>
                    </li>
                     <li class="nav-item">
                        <a href="#features" class="nav-link">Features</a>
                    </li>
                     <li class="nav-item">
                        <a href="#footer" class="nav-link">Contact Us</a>
                    </li>

                </ul>
            </div>
        </div>

</li>



            <br>

            <a class="btn btn-outline-light btn-sm" href="/Farmers/login" class="nav-link">Login as Farmer</a>

            &nbsp

            <a class="btn btn-outline-light btn-sm float-sm-right" href="/Buyers/login" class="nav-link">Login as Buyer</a>





    </nav>

<!-- HOME -->

<header id="home-section">
    <div class="dark-overlay">
        <div class="home-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 d-none d-lg-block">
                        <h1 class="display-4 animated slideInLeft"> Welcome to <strong>Farmer's Paradise</strong></h1>
                        <div class="d-flex flex-row pdelay1 animated slideInLeft">
                            <div class="p-4">
                                 <i class="fa fa-check-circle-o fa-size-40"></i>
                            </div>
                            <div class="p-4">
                                One of the most user friendly WebApp made especially for Farmers to get in touch with Buyers
                            </div>
                        </div>
                        <div class="d-flex flex-row pdelay2 animated slideInLeft">
                            <div class="p-4">
                                 <i class="fa fa-check-circle-o fa-size-40"></i>
                            </div>
                            <div class="p-4">
                                One of the most user friendly WebApp made especially for Farmers to get in touch with Buyers
                            </div>
                        </div>
                        <div class="d-flex flex-row pdelay3 animated slideInLeft">
                            <div class="p-4">
                                 <i class="fa fa-check-circle-o fa-size-40"></i>
                            </div>
                            <div class="p-4">
                                One of the most user friendly WebApp made especially for Farmers to get in touch with Buyers
                            </div>
                        </div>
                        <div class="d-flex flex-row pdelay4 animated slideInLeft">
                            <div class="p-4">
                                 <i class="fa fa-check-circle-o fa-size-40"></i>
                            </div>
                            <div class="p-4">
                                One of the most user friendly WebApp made especially for Farmers to get in touch with Buyers
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card text-center card-temp animated bounceInDown">
                            <div class="card-body">
                                <h2> Sign Up Now as a Farmer </h2>
                                <p> </p>

                                    <form>
                                        <div class="row">
                                      <div class="col-lg-6">
                                      <div class="form-group">

                                          <input class="form-control" type="text" name="FirstName" placeholder="First Name"/>
                                      </div>
                                      </div>
                                      <div class="col-lg-6">
                                      <div class="form-group">

                                          <input class="form-control" type="text" name="LastName" placeholder="Last Name"/>
                                      </div>
                                      </div>
                                      </div>

                                      <div class="form-group">
                                      <input class="form-control" type="email" name="email" placeholder="Email"/>
                                      </div>

                                      <div class="form-group">
                                          <input type="password" class="form-control" placeholder="Password">
                                      </div>
                                      <div class="form-group">
                                          <input type="password" class="form-control" placeholder="Confirm Password">
                                      </div>

                                      <input type="submit" class="btn btn-outline-light btn-block">
                                      <br><br>

                                              <div class="form-group">
                                                  <div class="row">
                                                      <div class="col-lg-6">
                                             Not a farmer?
                                                      </div>
                                                      <div class="col-lg-3">
                                             <a class="btn btn-outline-light btn-sm" href="/buyers/register"> Click Here</a>
                                                    </div>
                                                  </div>
                                                  </div>


                                      </div>

                                       </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<br>

<!-- features HEAD -->
<section id="features">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="o-5">
                    <h1 class="display-4"> Features </h1>
                    <p class="lead">
                        Below shows some basic features this WebApp offers to its Users
                    </p>
                    <br>


                </div>
            </div>

        </div>
    </div>

</section>

<!-- features section -->
<section id="explore-section" class="bg-light text-muted py-5">
    <div class="container">

        <div class="row text-center" style="opacity:0.9;">
  <div class="col-sm-6 col-md-4 col-lg-4 animated fadeInLeft bottom">
    <div class="thumbnail">
      <img class="img-res" src="https://www.kris-co.nl/images/wizard/r_2.PNG" alt="">
      <div class="caption">
          <br>
        <h3>Effective Matching</h3>
        <p>Matches Buyers & Sellers according to the demand of a certain agricultural product. </p>
        <p><a href="#" class="btn btn-outline-dark btn-inv" role="button">Read more</a></p>
      </div>
    </div>
  </div>


  <div class="col-sm-6 col-md-4 col-lg-4 animated fadeInUp bottom">
    <div class="thumbnail">
      <img class="img-res" src="https://res.cloudinary.com/hrscywv4p/image/upload/c_limit,h_630,w_1200/v1/272913/Gmail_Meter_Logo2_Fav_Icon_kxegcf.png" alt="">
      <div class="caption">
          <br>
        <h3>Helpful Infographic</h3>
        <p>Live & accurate generation of infographics based on critical data from transactions. </p>
        <p><a href="stats" class="btn btn-outline-dark btn-inv" role="button">Statistics</a></p>
      </div>
    </div>
  </div>


  <div class="col-sm-6 col-md-4 col-lg-4 animated fadeInRight bottom">
    <div class="thumbnail">
      <img class="rounded-circle img-res" src="https://www.kris-co.nl/images/wizard/r_2.PNG" alt="">
      <div class="caption">
          <br>
        <h3>Effective Matching</h3>
        <p>Matches Buyers & Sellers according to the demand of a certain agricultural product. </p>
        <p><a href="#" class="btn btn-outline-dark btn-inv" role="button">Read More</a> </p>
      </div>
    </div>
  </div>

</div>

    </div>
</section>

<!-- footer -->
<footer id="footer" class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center">
                <div class="p-5">
                    <h3 class="display-5"> Farmer's Paradise </h3>
                    <p class="lead">
                        Copyright &copy; 2017 Team Macros, All Rights Reserved.

                    </p>

                </div>
            </div>

             <div class="col-lg-6 text-center">
                <div class="p-5">
                    <h3 class="display-5"> Need Help? </h3>
                    <p class="lead">
                        Contact Us. We'll help in any way possible.
                         <a class="mail" href="mailto:solutions@guyana.com">solutions@guyana.com</a>
                    </p>



                </div>
            </div>

        </div>
    </div>
    a
</footer>

    <!-- Local SCRIPT FILES -->
    <script type="text/javascript" src="https://codesprint-nick24.c9users.io/assets/bootstrap4/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://codesprint-nick24.c9users.io/assets/js/popper.min.js"></script>
    <script type="text/javascript" src="https://codesprint-nick24.c9users.io/assets/js/jquery-3.2.1.js"></script>

    <!-- CDN SCRIPT FILES -->
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <!-- JQUERY CDN -->
    <!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->


</body>

</html>















<!--<script>-->

<!--    $(function() {-->

<!--        $('#features').click(function() {-->
<!--            $('#features2').slideUp();-->
<!--        });-->
<!--    });-->
<!--</script>-->
