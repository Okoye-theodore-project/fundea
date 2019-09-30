<?php require 'nav.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=ABeeZee|Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/colorstyle.css" />
    <link rel="stylesheet" href="assets/mdb.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/mystyle.css">
    <link rel="stylesheet" href="assets/css/colorstyle.css">
</head>

<body style="background-color: rgb(250,248,197)">
    
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6 offset-md-3 mt-5">
                <!-- Material form login -->
                <div class="card">

                    <h5 class="card-header white-text text-center py-4">
                        <strong>Sign in</strong>
                    </h5>

                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">

                        <!-- Form -->
                        <form class="text-center" style="color: #757575;" action="" method="post"
                            enctype="multipart/form-data">

                            <!-- Email -->
                            <div class="md-form">
                                <input type="email" id="email" class="form-control" name="email" id="email">
                                <label for="">E-mail</label>
                            </div>

                            <!-- Password -->
                            <div class="md-form">
                                <input type="password" id="password" class="form-control fsr " name="password" id="password" placeholder="password" >
                                
                            </div>

                            <div class="d-flex justify-content-around">
                                <div>
                                    <!-- Remember me -->
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input"
                                            id="defaultLoginFormRemember">
                                        <label class="custom-control-label" for="defaultLoginFormRemember">Remember
                                            me</label>
                                    </div>
                                </div>
                                <div>
                                    <!-- Forgot password -->
                                    <a href="#" data-target="#pwdModal" data-toggle="modal">Forgot password?</a>
                                </div>
                                <div class="message_box" style="margin:5px 0px;"></div>
                            </div>

                            <!-- Sign in button -->
                            <button class="btn btn-info btn-rounded btn-block my-4 waves-effect z-depth-0"
                                style="border-radius:20px" type="submit" name="btn-submit" id="btn-submit">Sign in</button>

                            <!-- Register -->
                            <p>Not a member?
                                <a href="register.php">Register</a>
                            </p>

                            <!-- Social login -->
                            <p>or sign in with:</p>
                            <a type="button" class="btn-floating btn-fb btn-sm">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a type="button" class="btn-floating btn-tw btn-sm">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a type="button" class="btn-floating btn-li btn-sm">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a type="button" class="btn-floating btn-git btn-sm">
                                <i class="fab fa-github"></i>
                            </a>

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</script>
<script type="text/javascript">
$(document).ready(function() {
function submit(){
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;

    if (email == "" || password == ""){
        swal("error!", "Please input your details!", "error");
    } else {
    $.ajax
    ({
    type: "POST",
    url: "log.php",
    data: "email="+email+"&password="+password,
    beforeSend: function() {
    $('.message_box').html(
    '<img src="assets/images/preloader.gif" width="50" height="50"/>'
    );
    }, 
    success: function(data)
    {
    setTimeout(function() {
    $('.message_box').html(data);
    }, 2000);
    }
   });
   }
}
    )};
</script>
    
                            


                        </form>
                        <!-- Form -->

                    </div>

                </div>
                <!-- Material form login -->
            </div>
            <!-- <div class="col">
                
            </div> -->
        </div>
    </div>


    <!-- Forgot password -->
    <!--modal-->
    <div id="pwdModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius:20px">
                <div class="modal-header p-0 info-color ">
                    <div class="col-md p-0">
                        <h5 class="card-header info-color white-text text-center py-4">
                            <strong>Sign in</strong>
                        </h5>
                    </div>
                    <div class="col-md- p-0">
                        <button type="button" class="close card-header red-text text-left" data-dismiss="modal"
                            aria-hidden="true">×</button>
                    </div>


                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="text-center">

                                    <p>If you have forgotten your password you can reset it here.</p>
                                    <div class="panel-body">
                                        <fieldset>
                                            <div class="form-group">
                                                <input class="form-control input-lg" placeholder="E-mail Address"
                                                    name="email" type="email">
                                            </div>
                                            <input class="btn btn-lg btn-primary" style="border-radius:20px"
                                                value="Send My Password" type="submit">
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="height:60px">
                    <div class="col-md-12">
                        <button class="btn" style="height:40px" data-dismiss="modal" aria-hidden="true">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
    </script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js">
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>$(document).ready(function() {
function submit(url, type, callback){
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;

    if (email == "" || password == ""){
        swal("error!", "Please input your details!", "error");
    } else {
    $.ajax
    ({
    type: "POST",
    url: "log.php",
    data: "email="+email+"&password="+password,
    beforeSend: function() {
    $('.message_box').html(
    '<img src="assets/images/preloader.gif" width="50" height="
    }, 
    success: function(data)
    {
    setTimeout(function() {
    $('.message_box').html(data);
    }, 2000);
    }
   });
   }
}
    )};