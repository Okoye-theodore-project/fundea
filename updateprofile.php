<?php include 'session.php';
                  $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); // valid extensions
                  $path = 'files/';
                  
                  if (isset($_FILES['file'])) {
                    $img = $_FILES['file']['name'];
                    $tmp = $_FILES['file']['tmp_name'];
                    
                    // get uploaded file's extension
                    $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
                    // can upload same image using rand function
                    $final_image = rand(1000,1000000).$img;
                    // check's valid format
                    if(in_array($ext, $valid_extensions)) { 
                        $path = $path.strtolower($final_image); 
                    
                        if(move_uploaded_file($tmp,$path)) {
                            echo "Image upload successful!";

                          $email = $_POST['email'];
                          $firstname = $_POST['firstname'];
                          $lastname = $_POST['lastname'];
                          $bio = $_POST['bio'];
                          $update_profile = "UPDATE users SET FIRST_NAME = '$firstname',
                                              LAST_NAME = '$lastname', BIO = '$bio', PICTURE = '$path'
                                              WHERE EMAIL = '$email'";
                          $result = mysqli_query($db , $update_profile);
                              if ($result) {
                        ?>
    
                                <script type='text/javascript'>
                                
                                    window.location.href='profile.php';
                                </script>
    
                                <?php
                          } else {
                          echo "$mysqli_error()";
                          }
                      }
                    }
                  } else {
                    echo "$mysqli_error()";
                  }
                      ?>