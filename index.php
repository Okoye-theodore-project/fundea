<?php require 'server.php';
include 'session.php';
if(isset($_SESSION['email'])){
  require 'nav.php';}elseif(!isset($_SESSION['email'])){
    require 'nav-user.php';
  };
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>FUNDEA</title>
  <link rel="stylesheet" href="assets/css/mystyle.css">
  <link rel="stylesheet" href="assets/css/colorstyle.css">
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/mdb.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link href="assets/mdb.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:700,800|Vollkorn:900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400i&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/LineIcons.css">


  <script src="assets/js/easypiechart.js"></script>


</head>

<body onload="numberWithCommas(x)">

  <!-- Navbar -->
 
  <!-- Navbar -->

  <!--Carousel Wrapper-->
  <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

    <div class=" white-text wow fadeIn ix" style="background-color: rgba(0, 0, 0, 0.205) ;padding: 10px;">
      <h1 class="mb-4">
        <strong>Bring Your <br>
          <span class="fsm"> IDEAS </span> to reality.</strong>
      </h1>
      <hr style="background-color: seashell ;" size="3px">
      <p>
        <strong>Welcome to the best platform for financial Aid.</strong>
      </p>


    </div>

    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

      <!--First slide-->
      <div class="carousel-item active">
        <div class="view"
          style="background-image: url(assets/images/banner-research-new-idea-award.jpg); background-repeat: no-repeat; background-size: cover; background-position: right bottom !important">


        </div>
      </div>
      <!--/First slide-->

      <!--Second slide-->
      <div class="carousel-item">
        <div class="view"
          style="background-image: url(assets/images/forgiveness-banner.jpg); background-repeat: no-repeat; background-size: cover;background-position: right bottom !important">


        </div>
      </div>
      <!--/Second slide-->

      <!--Third slide-->
      <div class="carousel-item">
        <div class="view"
          style="background-image: url(assets/images/handshake.jpg); background-repeat: no-repeat; background-size: cover; background-position: center">


        </div>
      </div>
      <!--/Third slide-->

    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->

  </div>
  <!--/.Carousel Wrapper-->
  <div conte class="myjumbotron" style="">
    <h1 class="display-4" contenteditable="true" >Hello, orld!</h1>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to
      featured content or information.</p>
    <hr class="my-2">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <p class="lead">
      <a class="btn text-white btn-md" href="#" role="button" style="background-color: rgb(85,55,18)">Learn more</a>
    </p>
  </div>

  </div>

  <!--Main layout-->
  <main class="">
    <div class="row mx-1 ">
      <div class="col-12 col-md-6 col-lg-4 col-sm-12 col-xl-3 mb-4" ">
        <div class=" card bc4">
        <img class="card-img-top" src="assets/images/handshake.jpg" alt="Card image cap">
        <div class="card-body ">
          <p style="text-align: right !important" class="cata-card fsr">Category</p>
          <h5 id="card-title" class="card-title fsm">Campaign title</h5>
          <p id="card-user fsl"> User Name </p>
          <p class="card-text"> <STRong>NOT MORE THAN 40 CHARATCTER</STRong> <br> quick example text to build on the
            card title and make up the bulk of the card's conten.</p>
        </div>
        <ul class="  list-group list-group-flush" style="border:none !important;">
          <li class="list-group-item text-right bc4 fsr" style="border:none !important;"><i
              class="lni-money-location mr-2 size-sm lni-fade-down-effect"></i>Location
          </li>
          <li class="list-group-item bc5 fc4">
            <div class="row align-items-end ">
              <div style="text-align: right; " class="col-4" id="divSize">
                <span class="fsr" style="font-size:70%"">Amonut</span>
                    <h2 class=" container pr-0">
                  &#8358;</h2><span>
                    <h4 style=" margin-bottom: 0rem !important; font-size: 1em !important;" id="amount"> 5,00000</h4>
                  </span>
              </div>
              <div class="col-4 chart ;" data-percent="73" style="text-align:center;  align-content: centerl;">
                <p class="fsr" style="font-size:70%"">progress</p>
              </div>
              <style>
              .chart{
              border-left: 1px solid #F8F2DE;
              border-right: 1px solid #F8F2DE;
              }
              </style>
              <div class=" col-4" style="text-align: left">
                  <p class="fsr  " style="font-size:70%; text-align: start !important">Ends in</p>
                  <h2>39</h2><span class="fsr" style="font-size:140%">Days</span>
              </div>
            </div>
          </li>
        </ul>
      </div>    
    </div>    
    </div>   
  </main>
  <script>
    var element = document.querySelectorAll('.chart');
    for (i = 0; i <= element.length; i++) {
      new EasyPieChart(element[i], {});
    }


    new EasyPieChart(element, {});
  </script>

  <!--Main layout-->

  <!--Footer-->
  <!-- Footer -->
 <?php 
 require 'footer.php'
 ?>
  <!-- Footer -->
  <!--/.Footer-->

</body>

<script src="assets/js/jquery-3.4.1.slim.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="/assets/mdb.js"></script>
<script type="text/javascript" src="/assets/js/myscripts.js"></script>
<script src="assets/js/wow.js"></script>

</html>
