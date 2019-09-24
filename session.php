<?php
    include ('server.php');
    session_start();
    $email = $_SESSION['signed_in'];
    $query = " SELECT * FROM users where EMAIL = '$email' ";
    $sql = mysqli_query($db , $query);
    $row = mysqli_fetch_array ($sql, MYSQLI_ASSOC);
    
  
    if (!isset($_SESSION['signed_in'])) {
        header("locaton:index.php");
    }
?>