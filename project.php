<?php include 'session.php';

$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); // valid extensions
$path = 'files/';


if(isset($_FILES['image'])){
$img = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];

// get uploaded file's extension
$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
// can upload same image using rand function
$final_image = rand(1000,1000000).$img;
// check's valid format
if(in_array($ext, $valid_extensions)) { 
    $path = $path.strtolower($final_image); 

    if(move_uploaded_file($tmp,$path)) {
        echo "Image upload successful!";

        $camptitle = $_POST['camptitle'];
        $campdesc = $_POST['campdesc'];
        $campcat = $_POST['campcat'];
        $location = $_POST['location'];
        $goal = $_POST['goal'];
        $rawdate = htmlentities($_POST['startdate']);
        $startdate = date('Y-m-d',strtotime($rawdate));
        $rawdate2 = htmlentities($_POST['closedate']);
        $closedate = date('Y-m-d',strtotime($rawdate2));
        $cr_date = date("Y/m/d H:i:s");


        $sql = "select ID from users where EMAIL = '$email'";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($result);
        $userid  = $row['ID'];

        // $cat = "INSERT INTO `project_category` (TYPE_NAME) VALUES ('$campcat)";
        // $category = mysqli_query($db, $cat);

        // $sql = "select ID from project_category where EMAIL = '$email'";
        // $result = mysqli_query($db, $sql);
        // $row = mysqli_fetch_array($result);
        // $userid  = $row['ID'];

        $query = "INSERT INTO projects (PROJECT_NAME, USER_ACCOUNT, PROJECT_DESCRIPTION, PROJECT_CATEGORY, PROJECT_LOCATION, START_DATE, END_DATE, IMAGE, GOAL, ADD_DATE)
        VALUES ('$camptitle', '$userid', '$campdesc', '$campcat', '$location', '$startdate', '$closedate', '$path', '$goal', '$cr_date')";
    
        if(mysqli_query($db, $query)){   
            ?>
            <!-- Sweet Alert -->
            <script type='text/javascript'>
            swal("Successfully registered!", "Now let's help you with your dreams", "success");
            window.setTimeout(function() {
                location.href='index.php';
            }, 0);
            </script>

            <?php
        } else {
            echo("Error description: " . mysqli_error($db));
            ?>
            
            <!-- Sweet Alert --> 
            <script type='text/javascript'>
            swal("Oops!", "There was a problem creating campaign!", "error");
            </script>

            <?php

            return;
        }
    }
}
}
else {
    echo("Error description: " . mysqli_error($db));
    ?>
            
    <!-- Sweet Alert -->
    <script type='text/javascript'>
    swal("Oops!", "An error occured!", "error");
    </script>

    <?php
    return;
 }    







?>