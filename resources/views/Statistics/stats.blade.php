@extends('templates.header')

@section('content')

<h1 style="color:#fff; text-align:center; padding-bottom:15px;"> Live Infographics </h1>
<div class="container">
  <div class="row">


    <div class="col-lg-6">
      <div class="panel panel-default" style="padding:25px;">
        <div class="panel-heading">
          <h2> Price of Banana over time Today ($GY) </h2>
        </div>
        <br>
        <canvas id="Banana" width="300" height="300"></canvas>
      </div>
    </div>

    <div class="col-lg-6">
      <div class="panel panel-default" style="padding:25px;">
        <div class="panel-heading">
          <h2> Top 5 Highest Grossing Vegetables [KG] </h2>
        </div>
        <br>
        <canvas id="popularVeg" width="300" height="300"></canvas>
      </div>
    </div>

    <div class="col-lg-6">
      <div class="panel panel-default" style="padding:25px;">
        <div class="panel-heading">
          <h2> Price of Banana over time Today ($GY) </h2>
        </div>
        <br>
        <canvas id="popularCrop" width="300" height="300"></canvas>
      </div>
    </div>

    <div class="col-lg-6">
      <div class="panel panel-default" style="padding:25px;">
        <div class="panel-heading">
          <h2> Price of Banana over time Today ($GY) </h2>
        </div>
        <br>
        <canvas id="popularFruit" width="300" height="300"></canvas>
      </div>
    </div>



  </div>



</div>




</div>

<script>






var Banana = document.getElementById('Banana').getContext('2d');

    var bananaChart = new Chart(Banana, {

        type: 'line', //bar, horizontalBar, pie, line, doughnut, radar, polarArea
        data: {
            labels: ['9AM', '10AM', '11AM', '12AM', '1PM', '2PM', '3PM'],
            // Adding Labels For Crops in Chart

            datasets: [{
                label: 'Price of Banana Over Time Today per Lb',
                data:
                [
                  50,
                  60,
                  40,
                  40,
                  25,
                  20,
                  15

                ],


                backgroundColor:
                [
                  'rgba(255,76,46,0.7)',
                  'rgba(244,67,34,0.7)',
                  'rgba(233,86,42,0.7)',
                  'rgba(222,62,12,0.7)',
                  'rgba(211,123,223,0.7)',
                  'rgba(199,124,45,0.7)',
                  'rgba(167,45,73,0.7)'
                ]


            }],

        },
        options: {},

    });

    var popularVeg = document.getElementById('popularVeg').getContext('2d');

    var popVeg = new Chart(popularVeg, {

        type: 'horizontalBar', //bar, horizontalBar, pie, line, doughnut, radar, polarArea
        data: {
            labels: ['Boulanger', 'Tomato', 'Sweet Pepper', 'Bora', 'Cabbage'],
            // Adding Labels For Crops in Chart

            datasets: [{
                label: 'Top 5 Highest Grossing Vegetables',
                data:
                [
                    450,
                    345,
                    347,
                    286,
                    140,



                ],


                backgroundColor:
                [
                    'rgba(255,95,120,0.6)',
                    'rgba(255,159,64,0.6)',
                    'rgba(255,143,98,0.6)',
                    'rgba(255,45,56,0.6)',
                    'rgba(255,124,67,0.6)',
                    'rgba(255, 100, 100, 100, 100)'
                ]


            }],

        },
        options: {},




    });




    var popularCrop = document.getElementById('popularCrop').getContext('2d');

    var popCrop = new Chart(popularCrop, {

        type: 'doughnut', //bar, horizontalBar, pie, line, doughnut, radar, polarArea
        data: {
            labels: ['Sugar Cane', 'Maiz', 'Rice', 'Wheat', 'Potatoes'],
            datasets: [{
                label: 'Most Popular Crops',
                data:
                [
                    790,
                    559,
                    455,
                    390,
                    349

                ],
                backgroundColor:
                [
                    'rgba(213, 231, 116, 0.6)',
                    'rgba(231, 116, 116, 0.6)',
                    'rgba(116, 147, 231, 0.6)',
                    'rgba(155, 45, 156, 0.6)',
                    'rgba(235, 153, 153, 0.6)'
                ]
            }]

        },
        options: {},




    });


    var popularFruit = document.getElementById('popularFruit').getContext('2d');

    var popFruit = new Chart(popularFruit, {

        type: 'horizontalBar', //OPTIONS: bar, horizontalBar, pie, line, doughnut, radar, polarArea
        data: {
            labels: ['Banana', 'Apple', 'Orange', 'Grape', 'Mango'],
            datasets: [{
                label: 'Top 5 Highest Grossing Fruits',
                data:
                [
                    655,
                    345,
                    123,
                    578,
                    456

                ],
                backgroundColor:
                [
                    'rgba(155,95,120,0.6)',
                    'rgba(145,159,64,0.6)',
                    'rgba(64,143,98,0.6)',
                    'rgba(90,45,56,0.6)',
                    'rgba(215,124,67,0.6)'
                ]
            }]

        },
        options: {},




    });



    var popularVeg = document.getElementById('popularVeg').getContext('2d');

    var popVeg = new Chart(popularVeg, {

        type: 'horizontalBar', //bar, horizontalBar, pie, line, doughnut, radar, polarArea
        data: {
            labels: ['Boulanger', 'Tomato', 'Sweet Pepper', 'Bora', 'Cabbage'],
            // Adding Labels For Crops in Chart

            datasets: [{
                label: 'Top 5 Highest Grossing Vegetables',
                data:
                [
                    450,
                    345,
                    347,
                    286,
                    140,



                ],


                backgroundColor:
                [
                    'rgba(255,95,120,0.6)',
                    'rgba(255,159,64,0.6)',
                    'rgba(255,143,98,0.6)',
                    'rgba(255,45,56,0.6)',
                    'rgba(255,124,67,0.6)',
                    'rgba(255, 100, 100, 100, 100)'
                ]


            }]

        },
        options: {},




    });




    var highestCropInDemandCrop = document.getElementById('highestCropInDemand').getContext('2d');

    var highCrop = new Chart(highestCropInDemandCrop, {

        type: 'bar', //bar, horizontalBar, pie, line, doughnut, radar, polarArea
        data: {
            labels: ['Rice', 'Potato', 'Pumpkin', 'Maiz', 'Tomato', 'Carrot'],
            datasets: [{
                label: 'Crops Currently in High Demands',
                data:
                [
                    45,
                    34,
                    5,
                    9,
                    4,
                    3

                ],
                backgroundColor:
                [
                    'rgba(213, 231, 116, 0.6)',
                    'rgba(231, 116, 116, 0.6)',
                    'rgba(116, 147, 231, 0.6)',
                    'rgba(155, 45, 156, 0.6)',
                    'rgba(235, 153, 153, 0.6)',
                    'rgba(215, 53, 123, 0.6)'
                ]
            }]

        },
        options: {},




    });


</script>





@endsection
