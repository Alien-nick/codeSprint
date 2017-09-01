<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <title>Buyer</title>
<style>
.profile
{
    padding-top:90px;
}

.demand-content
{
    color:white;
}

</style>

</head>


<body>

    <div class="container">
        <div class="row profile">

            <!-- USER PROFILE SIDEBAR -->
            <div class="col-lg-3">
                <div class="sidebar">

                    <div class="user-img ">
                         <img src="http://cdn.onlinewebfonts.com/svg/img_518099.svg" class="rounded img-fluid" alt="">
                    </div>
                    <div class="container">
                    <div class="user-info py-5">

                        <div class="user-name">
                        <strong>Name:</strong>
                        <p class="lead"> John Thomas <p>
                        </div>

                        <div class="user-address">
                        <strong>Address:</strong>
                        <p class="lead"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem </p>
                        </div>

                        <div class="user-tele">
                        <strong>Contact:</strong>
                        <p class="lead"> +592 346 6654 </p>
                        </div>

                        <div>
                        <a href="#logout" class="btn btn-outline-dark"> Log Out </a>
                        </div>

                    </div>
                    </div>

                </div>

            </div>

            <!-- SPACER -->
            <div class="col-lg-1">

            </div>

            <!-- DEMANDS SECTION -->
            <div class="col-lg-8">

                <h1 class="py-3"> My Demands </h1>

                <div class="card bg-dark demand-content">
                    <div class="p-4">
                    <div class="title">
                        <h3> Rice <span class="badge badge-danger float-lg-right">Important</span> </h3>
                    </div>
                    <div class="description">
                        <p class="lead">
                            100 LBS of White Rice Needed in 23 days.
                        </p>

                        <a href="#edit" class="btn btn-sm btn-info">Edit</a>
                        <a href="#delete" class="btn btn-sm btn-danger">Delete</a>

                    </div>
                </div>
                </div><br>

                <div class="card bg-dark demand-content">
                    <div class="p-4">
                    <div class="title">
                        <h3> Rice </h3>
                    </div>
                    <div class="description">
                        <p class="lead">
                            100 LBS of White Rice Needed in 23 days.
                        </p>

                        <a href="#edit" class="btn btn-sm btn-info">Edit</a>
                        <a href="#delete" class="btn btn-sm btn-danger">Delete</a>

                    </div>
                </div>
                </div><br>

                <div class="card bg-dark demand-content">
                    <div class="p-4">
                    <div class="title">
                        <h3> Rice </h3>
                    </div>
                    <div class="description">
                        <p class="lead">
                            100 LBS of White Rice Needed in 23 days.
                        </p>

                        <a href="#edit" class="btn btn-sm btn-info">Edit</a>
                        <a href="#delete" class="btn btn-sm btn-danger">Delete</a>

                    </div>
                </div>
                </div><br>


                </div>

            </div>

        </div>


    </div>

</body>
</html>
