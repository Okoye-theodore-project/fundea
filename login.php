<?php require'nav.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>
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
        <div class="row mt-5">
            <div class="col-md-6 offset-md-3">
                <!-- Material form login -->
                <div class="card">

                    <h5 class="card-header info-color white-text text-center py-4">
                        <strong>Sign in</strong>
                    </h5>

                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">

                        <!-- Form -->
                        <form class="text-center" style="color: #757575;" action="" method="post" enctype="multipart/form-data">

                            <!-- Email -->
                            <div class="md-form">
                                <input type="email" id="" class="form-control" name="email" id="email"> 
                                <label for="">E-mail</label>
                            </div>

                            <!-- Password -->
                            <div class="md-form">
                                <input type="password" id="" class="form-control" name="password" id="password">
                                <label for="">Password</label>
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
                            </div>

                            <!-- Sign in button -->
                            <button class="btn btn-info btn-rounded btn-block my-4 waves-effect z-depth-0"
                                style="border-radius:20px" type="submit" id="btn-submit">Sign in</button>

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

                           
<?php
require "server.php";
// session_start();

if(isset($_REQUEST['email'])) {

  $email = $_REQUEST['email'];
  $password = $_REQUEST['password'];

  $email = mysqli_real_escape_string($db,$email);

  $password = mysqli_real_escape_string($db,$password);

  $sql = "SELECT * FROM users where EMAIL = '$email' and PASSWORD = '".md5($password)."'";

  $result = mysqli_query($db , $sql);

  $row = mysqli_fetch_array($result);

  $count = mysqli_num_rows($result);

  if ($count == 1) {

    $_SESSION['email'] = $email;

    echo "LOG IN SUCCESSFUL!";
    header("Location: index.php");
    
  }
  else{
    echo  "<br>Invalid login details";
  }
}
    

?>


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
                <div class="modal-header p-0 info-color " >
                    <div class="col-md p-0">
                        <h5 class="card-header info-color white-text text-center py-4">
                            <strong>Sign in</strong>
                        </h5>
                    </div>
                    <div class="col-md- p-0">
                    <button type="button" class="close card-header red-text text-left" data-dismiss="modal" aria-hidden="true">×</button>
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
                                            <input class="btn btn-lg btn-primary" style="border-radius:20px" value="Send My Password"
                                                type="submit">
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

</body>

</html>