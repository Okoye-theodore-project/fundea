<?php require 'nav.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=ABeeZee|Ubuntu&display=swap" rel="stylesheet">
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
            <div class="col-md-6 offset-md-3">
                <!-- Material form login -->
                <!-- Material form register -->
                <div class="card">

                    <h5 class="card-header white-text text-center py-4" style="background-color: #532C0B">
                        <strong>Sign up</strong>
                    </h5>

                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">

                        <!-- Form -->
                        <form class="text-center" style="color: #757575;" action="" method="post"
                            enctype="multipart/form-data" id="registration">

                            <div class="form-row">
                                <div class="col">
                                    <!-- First name -->
                                    <div class="md-form">
                                        <input type="text" name="firstname" id="firstname" class="form-control">
                                        <label for="">First name</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <!-- Last name -->
                                    <div class="md-form">
                                        <input type="text" name="lastname" id="lastname" class="form-control">
                                        <label for="">Last name</label>
                                    </div>
                                </div>
                            </div>

                            <!-- E-mail -->
                            <div class="md-form mt-0">
                                <input type="email" name="email" id="email" class="form-control">
                                <label for="">E-mail</label>
                            </div>

                            <!-- Password -->
                            <div class="md-form">
                                <input type="password" name="password1" id="password1" class="form-control"
                                    aria-describedby="">
                                <label for="">Password</label>
                                <div class="message_box" style="margin:5px 0px;">
                            </div>

                            <!-- Confirm Password -->
                            <div class="md-form">
                                <input type="password" name="password2" id="password2" class="form-control"
                                    aria-describedby="">
                                <label for="">Confirm Password</label>
                                <small id="" class="form-text text-muted mb-4"></small>
                            </div>

                            <!-- Newsletter -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter">
                                <label class="custom-control-label" for="defaultRegisterFormNewsletter">Subscribe to our
                                    newsletter</label>
                            </div>

                            <!-- Sign up button -->
                            <button class="btn btn-info btn-rounded btn-block my-4 waves-effect z-depth-0"
                                style="border-radius:20px" name="signup" id="btn-submit" type="submit">Sign Up</button>

                            <!-- Social register -->
                            <p>or sign up with:</p>

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

                            <!-- Otherwise log in if already user -->
                            <p>Already a member?
                                <a href="login.php">Log in</a>
                            </p>

                            <hr>

                            <!-- Terms of service -->
                            <p>By clicking
                                <em>Sign up</em> you agree to our
                                <a href="" target="_blank">terms of service</a>

                                <!-- JQuery -->
                            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
$(document).ready(function() {
   var delay = 2000;
   $('.btn-info').click(function(e){
   e.preventDefault();

   let password1 = $("#password1").val();
   let password2 = $("#password2").val();
   let email = $("#email").val();
   let firstname = $("#firstname").val();
   let lastname = $("#lastname").val();
   let emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
   let emailValid = emailRegex.test(email);
   let passRegex = new RegExp("^(?=.[a-z])(?=.[A-Z])(?=.*[0-9])");
   let validpass = passRegex.test(password1);
   if (
     firstname == "" ||
     lastname == "" ||
     password1 == "" ||
     password2 == "" ||
     email == ""
   ) {
     swal("error!", "Empty fields are not allowed", "error");
   }
   else if (password1.length < 6 && validpass) {
     $(".message_box")
       .text(
         "the password is too short or doesnt contain a capital or small letter or number"
       )
       .css("color", "red");
   }
    else if (!password1.match(password2)) {
     $(".message_box")
       .text("your password and confirm password do not match")
       .css("color", "red");
   } else if (!emailValid) {
     $(".message_box")
       .text("Your Email is not valid")
       .css("color", "red");
   }
   else {
    $.ajax
    ({
    type: "POST",
    url: "reg.php",
    data: "firstname="+firstname+"&lastname="+lastname+"&email="+email+"&password1="+password1,
    beforeSend: function() {
    $('.message_box').html(
    '<img src="assets/images/preloader.gif" width="50" height="50"/>'
    );
    }, 
    success: function(data)
    {
    setTimeout(function() {
    $('.message_box').html(data);
    }, delay);
    }
   });
   }
});
});
</script>


                        </form>
                        <!-- Form -->

                    </div>

                </div>
                <!-- Material form register -->
                <!-- Material form login -->
            </div>
            <!-- <div class="col">
                
            </div> -->
        </div>
    </div>


    <!-- JQuery -->
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
    </script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js">
    </script>
    <!-- JQuery validation -->
    <script src="assets/js/ajax.js"></script>
    <!-- Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>