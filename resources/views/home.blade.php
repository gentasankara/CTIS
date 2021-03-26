<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('admin/assets/style.css')}}">

    <title>Home </title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">
        <img src="{{asset('img/logo.png')}}" width="120" height="50" class="d-inline-block align-top" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active mr-4" href="/">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link mr-4" href="/dashboard">Dashboard</a>
            </div>
        </div>
    </div>
</nav>
<!-- Jumbotron -->
<div class="container">
    <div class="jumbotron-fluid ">
          <h1 class="display-4">Covid Testing<br>Information System</h1>
          <!-- <img src="img/Delivery-rafiki.png" class=" img-deliver" alt=""> -->
          <!-- <img src="img/delivery-truck.jpg" class=" img-deliver" alt=""> -->
          <p class="pt-3">CTIS (Covid Testing Information System) is a web application that  <br> helps medical personnel  record test results for COVID-19 patients and <br>facilitate centralized digital data collection. </p>
          <button type="button" class="btn btn-primary">
            Read More
          </button>           
        </div>
    </div>
</div>
<!-- Info -->
<div id="info-pan">
    <div class="container-flex bg-primary">
        <div class="container ">
            <div class="info">
                <h2 class="text-center my-5">Simple steps to protect yourself and other from Covid-19 </h2>
                <div class="row mb-5 text-dark">
                    <div class="col-lg">
                        <div class="card" style="width: 21rem;">
                            <img class="card-img-top" src="{{asset('admin/assets/img/handwash.png')}}" alt="Card image cap">
                            <div class="card-body"> 
                                <h5 class="card-title text-center">Wash Your hand</h5>
                                <p class="card-text text-secondary text-center">Wash your hands with soap and running water regularly.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg">
                    <div class="card" style="width: 21rem;">
                        <img class="card-img-top" src="{{asset('admin/assets/img/mask.png')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center">Use masker</h5>
                            <p class="card-text text-secondary text-center">Wear the mask properly wherever you go.</p>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg ">
                    <div class="card" style="width: 21rem;">
                        <img class="card-img-top" src="{{asset('admin/assets/img/distancing.png')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title  text-center">Maintain a safe distance </h5>
                            <p class="card-text text-secondary text-center">Maintain a safe distance of 1.5 - 2 meters from other people.</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>      
    </div>
</div>
<footer class="bg-light text-center  text-dark">
  <!-- Copyright -->
  <div class="text-center p-3" >
    © 2021 Copyright:
    <a class="text-dark" href="#">CTIS</a>
  </div>
  <!-- Copyright -->
</footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>