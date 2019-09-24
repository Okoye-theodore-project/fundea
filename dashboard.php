<?php require 'server.php';
// include 'session.php';
  require 'nav-user.php';

  
  $sql = "SELECT projects.*, users.FIRST_NAME, users.LAST_NAME, DATEDIFF(projects.END_DATE, CURDATE()) AS days
  FROM projects, users
  WHERE projects.USER_ACCOUNT = users.ID";
            $result = $db->query($sql);
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
    
    <div class="row mx-5 px-5">
    <?php
        //Fetch Data form database
        if($result->num_rows > 0){
         while($row = $result->fetch_assoc()){
         ?>
      <div class="col-12 col-md-6 col-lg-4 col-sm-12 col-xl-3 mb-4" ">
        <div class=" card bc4" href="index.php">
      <p><a href="aCampaign.php"><?php echo  "<img class='card-img-top' style='height:300px; width: 100%;' src='".$row['IMAGE']."' id='preview' alt='Card image cap'/>"; ?></a></p> 
        <div class="card-body ">
          <p style="text-align: right !important" class="cata-card fsr"><?php echo $row['PROJECT_CATEGORY'];?></p>
          <h5 id="card-title" class="card-title fsm" style='text-transform: uppercase;'><?php echo $row['PROJECT_NAME'];?></h5>
          <p id="card-user fsl" style='text-transform: capitalize; font-weight: bold;'>By 
            <?php echo $row['FIRST_NAME']. " " . $row['LAST_NAME']; ?>
          </p>
          <p class="card-text" style="height: 75px"> <?php echo $row['PROJECT_DESCRIPTION'];?></p>
        </div>
        <ul class="  list-group list-group-flush" style="border:none !important;">
          <li class="list-group-item text-right bc4 fsr" style="border:none !important;"><i
              class="lni-money-location mr-2 size-sm lni-fade-down-effect"></i><?php echo $row['PROJECT_LOCATION'];?>
          </li>
          <li class="list-group-item bc5 fc4">
            <div class="row align-items-end ">
              <div style="text-align: center; " class="col-4  pb-2" id="divSize">
                <span class="fsr" style="font-size:70%"">Amount</span>
                    <h2 class=" container mb-0 p-0">
                  &#8358;</h2><span>
                    <h4 style=" margin-bottom: 0rem !important; font-size: 1em !important;" id="amount"><?php echo $english_format_number = number_format($row['GOAL']);?></h4>
                  </span>
              </div>
              <div class="col-4 chart ;" data-percent="45" style="text-align:center;  align-content: centerl;">
                <p class="fsr" style="font-size:70%"">progress</p>
              </div>
              <style>
              .chart{
              border-left: 1px solid #F8F2DE;
              border-right: 1px solid #F8F2DE;
              }
              </style>
              <div class=" col-4" style="text-align: center">
                  <p class="fsr  " style="font-size:70%; text-align: center !important">Ends in</p>
                  <h2 class="mb-0 p-0"><?php echo $row['days'];?></h2><span class="fsr" style="font-size:140%">Days</span>
              </div>
            </div>
          </li>
        </ul>
      </div>    
    </div>
    <?php
           }
           }
           else
            { echo "No data found" ;} ?>    
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
