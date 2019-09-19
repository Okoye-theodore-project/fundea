<<<<<<< HEAD
=======
<?php require'nav.php';?>
>>>>>>> session
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
</head>

<body>
    <div class="container">
<<<<<<< HEAD
        <div class="row">
=======
        <div class="row mt-5">
>>>>>>> session
            <div class="col-md-6 offset-md-3">
                <!-- Material form login -->
                <!-- Material form register -->
                <div class="card">

                    <h5 class="card-header info-color white-text text-center py-4">
                        <strong>Sign up</strong>
                    </h5>

                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">

                        <!-- Form -->
<<<<<<< HEAD
                        <form class="text-center" style="color: #757575;"
                            action="" method="post"
                            enctype="multipart/form-data">
=======
                        <form class="text-center" style="color: #757575;" action="" method="post"
                            enctype="multipart/form-data" id="registration">
>>>>>>> session

                            <div class="form-row">
                                <div class="col">
                                    <!-- First name -->
                                    <div class="md-form">
<<<<<<< HEAD
                                        <input type="text" name="firstname" class="form-control">
=======
                                        <input type="text" name="firstname" id="firstname" class="form-control">
>>>>>>> session
                                        <label for="">First name</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <!-- Last name -->
                                    <div class="md-form">
<<<<<<< HEAD
                                        <input type="text" name="lastname" class="form-control">
=======
                                        <input type="text" name="lastname" id="lastname" class="form-control">
>>>>>>> session
                                        <label for="">Last name</label>
                                    </div>
                                </div>
                            </div>

                            <!-- E-mail -->
                            <div class="md-form mt-0">
<<<<<<< HEAD
                                <input type="email" name="email" class="form-control">
=======
                                <input type="email" name="email" id="email" class="form-control">
>>>>>>> session
                                <label for="">E-mail</label>
                            </div>

                            <!-- Password -->
                            <div class="md-form">
<<<<<<< HEAD
                                <input type="password" name="password1" class="form-control" aria-describedby="">
                                <label for="">Password</label>
                                <small id="" class="form-text text-muted mb-4">
                                    At least 8 characters including 1 digit
                                </small>
=======
                                <input type="password" name="password1" id="password1" class="form-control"
                                    aria-describedby="">
                                <label for="">Password</label>
                                <div class="message_box" style="margin:5px 0px;">
>>>>>>> session
                            </div>

                            <!-- Confirm Password -->
                            <div class="md-form">
<<<<<<< HEAD
                                <input type="password" name="password2" class="form-control" aria-describedby="">
=======
                                <input type="password" name="password2" id="password2" class="form-control"
                                    aria-describedby="">
>>>>>>> session
                                <label for="">Confirm Password</label>
                                <small id="" class="form-text text-muted mb-4"></small>
                            </div>

                            <!-- Phone number -->
                            <div class="md-form">
<<<<<<< HEAD
                                <input type="text" name="phone" class="form-control">
=======
                                <input type="text" name="phone" id="phone" class="form-control">
>>>>>>> session
                                <label for="materialRegisterFormPhone">Phone number</label>
                                <small class="form-text text-muted mb-4">
                                    Optional - for two step authentication
                                </small>
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

<<<<<<< HEAD

<?php require "server.php";

//initialize variables with empty values
$firstname = $lastname = $email = $password1 = $password2 = $phone = "";

// Processing form data when form is submitted
if(isset($_REQUEST['email'])){
    $firstname = stripslashes($_REQUEST['firstname']);
    $firstname = mysqli_real_escape_string($db, $firstname);
    $lastname = stripslashes($_REQUEST['lastname']);
    $lastname = mysqli_real_escape_string($db, $lastname);
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($db, $email);
    $password1 = stripslashes($_REQUEST['password1']);
    $password1 = mysqli_real_escape_string($db, $password1);
    $password2 = stripslashes($_REQUEST['password2']);
    $password2 = mysqli_real_escape_string($db, $password2);
    $phone = stripslashes($_REQUEST['phone']);
    $phone = mysqli_real_escape_string($db, $phone);
    $trn_date = date("Y-m-d H:i:s");

        $query = "INSERT into `users` (FIRST_NAME, LAST_NAME, EMAIL, PASSWORD, PHONE, TRN_DATE)
        VALUES ('$firstname', '$lastname', '$email', '".md5($password1)."', '$phone', '$trn_date')";
        $result = mysqli_query($db,$query);
        if($result){
            echo "<div class='form'>
            <h3>You are registered successfully.</h3>
            <br/>Click here to <a href='login.php'>Login</a></div>";
        } else {

            echo "error".$sql.mysqli_error($db);
  
         }
         
 mysqli_close($db);
}
?>

=======
                            <!-- <div class="message_box" style="margin:10px 0px;"> -->

<script>
$(document).ready(function() {
   var delay = 2000;
   $('.btn-info').click(function(e){
   e.preventDefault();
   var firstname = $('#firstname').val();
   if(firstname == ''){
   $('.message_box').html(
   '<span style="color:red;">Enter Your First Name!</span>'
   );
   $('#firstname').focus();
   return false;
   }
   var lastname = $('#lastname').val();
   if(lastname == ''){
   $('.message_box').html(
   '<span style="color:red;">Enter Your Last Name!</span>'
   );
   $('#lastname').focus();
   return false;
   }
 
   var email = $('#email').val();
   if(email == ''){
   $('.message_box').html(
   '<span style="color:red;">Enter Email Address!</span>'
   );
   $('#email').focus();
   return false;
   }
   if( $("#email").val()!='' ){
   if( !isValidEmailAddress( $("#email").val() ) ){
   $('.message_box').html(
   '<span style="color:red;">Provided email address is incorrect!</span>'
   );
   $('#email').focus();
   return false;
   }
   }
 
   var password1 = $('#password1').val();
   if(password1 == ''){
   $('.message_box').html(
   '<span style="color:red;">Please input at least 6 characters!</span>'
   );
   $('#password1').focus();
   return false;
   } 
   var password2 = $('#password2').val();
   if(password2 == ''){
   $('.message_box').html(
   '<span style="color:red;">Please input at least 6 characters!</span>'
   );
   $('#password2').focus();
   return false;
   } 
 
   $.ajax
   ({
   type: "POST",
   url: "reg.php",
   data: "firstname="+firstname+"&lastname="+lastname+"&email="+email+"&password1="+password1,
   beforeSend: function() {
   $('.message_box').html(
   '<img src="Loader.gif" width="25" height="25"/>'
   );
   }, 
   success: function(data)
   {
   setTimeout(function() {
   $('.message_box').html(data);
   }, delay);
   }
   });
   });
 
});
</script>

<script>
//Email Validation Function 
function isValidEmailAddress(emailAddress) {
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    return pattern.test(emailAddress);
};
</script>
>>>>>>> session
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
    </script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js">
    </script>
<<<<<<< HEAD
=======
    <!-- JQuery validation -->
    <script src="assets/js/ajax.js"></script>
    <script type="text/javascript" src="assets/js/form-validation.js"></script>
>>>>>>> session
    <!-- Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>