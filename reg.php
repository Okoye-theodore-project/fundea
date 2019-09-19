<?php require_once "server.php";

// Processing form data when form is submitted
if(isset($_REQUEST['email'])){
    $firstname = stripslashes($_REQUEST['firstname']);
    $firstname = mysqli_real_escape_string($db, $firstname);
    $lastname = stripslashes($_REQUEST['lastname']);
    $lastname = mysqli_real_escape_string($db, $lastname);
    $email = stripslashes($_REQUEST['email']);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $email = mysqli_real_escape_string($db, $email);
    $password1 = stripslashes($_REQUEST['password1']);
    $password1 = mysqli_real_escape_string($db, $password1);
    $trn_date = date("Y-m-d H:i:s");

    $sql= "SELECT * FROM users where EMAIL = '$email'";
    $result = mysqli_query($db , $sql);

        $row = mysqli_fetch_array($result);

        $count = mysqli_num_rows($result);

        if ($count == 1) {
            echo "A user already available with this email!";
            return;
        }

        $query = "INSERT into `users` (FIRST_NAME, LAST_NAME, EMAIL, PASSWORD, PHONE, TRN_DATE)
        VALUES ('$firstname', '$lastname', '$email', '".md5($password1)."', '', '$trn_date')";
        $result = mysqli_query($db,$query);
        if($result){
            $msg =  "You have successfully Registered. <a href='login.php'>LOGIN</a>  now..";
            

		
		echo $msg;
		
        } else {

            echo "error".$sql.mysqli_error($db);
  
         }
        }


?>