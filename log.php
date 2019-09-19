<?php require "server.php";
 session_start();

   $email = $_POST['u'];

   $password = $_POST['p'];

   $msg = array();

   $email = mysqli_real_escape_string($db,$email);

   $password = mysqli_real_escape_string($db,$password);

   $sql = $db->prepare("SELECT * FROM users where email=:EMAIL and password=:PASSWORD");
   $sql->bindparam(':EMAIL', $email);
   $sql->bindparam(':EMAIL', $email);
   $sql->execute();

   if( $sql->fetch()) {
       $_SESSION['account']=true;
       $data['state'] = 1;
   } else {
    $data['state'] = 0;
   }

   
?>