<?php

session_start();

if (!isset($_SESSION['signed_in'])) {
    echo "you need to be signed in";
    }

elseif
    (session_destroy()) {

    header("location:index.php");
}

?>