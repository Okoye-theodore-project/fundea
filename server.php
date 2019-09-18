<?php
//connecting to database
$db = mysqli_connect('localhost', 'root', '', 'fundeadb');

if (!$db) {
	# code...
 die ("connection failed " . mysqli_connect_error());
}else {
    // echo ("connection successful");
}

?>