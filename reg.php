<?php require "server.php";

// Processing form data when form is submitted
if(isset($_POST['email'])){
    $firstname = stripslashes($_POST['firstname']);
    $firstname = mysqli_real_escape_string($db, $firstname);
    $lastname = stripslashes($_POST['lastname']);
    $lastname = mysqli_real_escape_string($db, $lastname);
    $email = stripslashes($_POST['email']);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $email = mysqli_real_escape_string($db, $email);
    $password1 = stripslashes($_POST['password1']);
    $password1 = mysqli_real_escape_string($db, $password1);
    $trn_date = date("Y-m-d H:i:s");

    $sql= "SELECT * FROM users where EMAIL = '$email'";
    $result = mysqli_query($db , $sql);

        $row = mysqli_fetch_array($result);

        $count = mysqli_num_rows($result);

        if ($count == 1) {
            ?>
            <!-- Sweet Alert -->
            <script type='text/javascript'>
            swal("Oops!", "User already exists with that email!", "error");
            </script>

            <?php
            return;
        }

        $query = "INSERT INTO users (FIRST_NAME, LAST_NAME, EMAIL, PASSWORD, TRN_DATE)
        VALUES ('$firstname', '$lastname', '$email', '".md5($password1)."', '$trn_date')";
       
        if(mysqli_query($db,$query)){

            ?>
            <!-- Sweet Alert -->
            <script type='text/javascript'>
            swal("Successfully registered!", "Now let's help you with your dreams", "success");
            window.setTimeout(function() {
                location.href='login.php';
            }, 0);
            </script>

            <?php   
		
        } else {
            ?>
            
            <!-- Sweet Alert -->
            <script type='text/javascript'>
            swal("Oops!", "User already exists with that email!", "error");
            </script>

            <?php
            return;
         }
        } ELSE  {echo "NOTHING";} 


?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>