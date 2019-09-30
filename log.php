<?php 
session_start();
require 'server.php';

if (isset($_POST['email'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

  $msg = array();

  $email = mysqli_real_escape_string($db,$email);

  $password = mysqli_real_escape_string($db,$password);

  $sql = "SELECT * FROM users where EMAIL = '$email' and PASSWORD = '".md5($password)."'";

  $result = mysqli_query($db , $sql);

  $row = mysqli_fetch_array($result);

  $count = mysqli_num_rows($result);

  if ($count == 1) {

    $_SESSION['signed_in'] = $email;
    
    ?>

                            <script type='text/javascript'>
                            
                                window.location.href='profile.php';
                            </script>

                            <?php
                            
                        }
  else{
    echo  "<p><br>Invalid login details</P>";
  }
}

?>