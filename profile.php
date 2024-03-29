<?php require 'session.php';
      require 'nav-user.php';      

if (!isset($_SESSION['signed_in'])) {
	header('location:index.php');
}
 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>FUNDEA</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/mdb.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    />
    <link href="assets/mdb.css" rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:700,800|Vollkorn:900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/css/mystyle.css" />
    <link rel="stylesheet" href="assets/css/colorstyle.css" />
  </head>

  <body style="background-color: rgb(250,248,197)">
    <div class="container-fluid gedf-wrapper mt-5">
      <div class="row">
        <div class="col-md-3">
          <div
            class="card"
            style="width: auto; background-color: rgb(85,55,18)"
          >
          <?php
           
             echo  "<img src='".$row['PICTURE']."' class='card' style='height: 170px; width: auto; z-index:
             1;position: inherit ; margin: auto; ;top: 3em;border-radius: 50%;
             border: 5px solid #ddd;' alt='No Cover Image'/>";
             
            ?> 

            <div class="bg-white" style="height: fit-content">
              <h3
                class="fsm"
                style="  text-transform: capitalize; margin-top: 50px!important; text-align:center"
              >
                <?php echo $row['FIRST_NAME']. " " . $row['LAST_NAME']; ?>
              </h3>
              <hr />
            </div>
            <div class="card-body" style="background-color: rgb(255, 255, 255)">
              <h4 class="card-title">hydrogen</h4>
              <p class="card-text">
                <?php echo $bio = $row['BIO'];?>
              </p>
            </div>
          </div>
          <br />
        </div>
        <div class="col-md-6 gedf-main">
          <!--- \\\\\\\Post-->
          <div class="card gedf-card">
            <div class="card-header">
              <ul
                class="nav nav-tabs card-header-tabs"
                id="myTab"
                role="tablist"
              >
                <li class="nav-item">
                  <a
                    class="nav-link active"
                    id="posts-tab"
                    data-toggle="tab"
                    href="#posts"
                    role="tab"
                    aria-controls="posts"
                    aria-selected="true"
                    >Your Campaigns</a
                  >
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    id="images-tab"
                    data-toggle="tab"
                    role="tab"
                    aria-controls="images"
                    aria-selected="false"
                    href="#images"
                    >Edit Profile</a
                  >
                </li>
              </ul>
            </div>
            <div class="card-body">
              <div class="tab-content" id="myTabContent">
                <div
                  class="tab-pane fade show active"
                  id="posts"
                  role="tabpanel"
                  aria-labelledby="posts-tab"
                >
                  <div>
                    <a href="campaign.php" class="btn"
                      >New <strong>Campaign</strong></a
                    >
                  </div>

                  <hr />
                  <div class="row">
                  <?php
                  $sql = "SELECT projects.*, users.*, DATEDIFF(projects.END_DATE, CURDATE()) AS days
                  FROM projects, users
                  WHERE projects.USER_ACCOUNT = users.ID and users.EMAIL = '$email'";
                  $result = $db->query($sql);
                  //Fetch Data form database
                  if($result->num_rows > 0){
                  while($row = $result->fetch_assoc()){
                  ?>
                    <div class="col">
                      <div class="card" style="width: 16rem;">
                      <p><a href="aCampaign.php"><?php echo  "<img class='card-img-top' style='height:250px; width: 100%;' src='".$row['IMAGE']."' id='preview' alt='Card image cap'/>"; ?></a></p> 
                        <div class="card-body">
                          <h5 class="card-title"><?php echo $row['PROJECT_NAME']; ?></h5>
                          <p class="card-text" style="height: 150px">
                          <?php echo $row['PROJECT_DESCRIPTION']; ?>
                          </p>
                          <a href="aCampaign.php" class="btn">read more</a>
                        </div>
                      </div>
                    </div>
                  <?php }
           }
           else
            { echo "No data found" ;} ?> 
                  </div>
                </div>
                <div
                  class="tab-pane fade"
                  id="images"
                  role="tabpanel"
                  aria-labelledby="images-tab"
                >
                <?php   $query = " SELECT * FROM users where EMAIL = '$email' ";
                $sql = mysqli_query($db , $query);
                $row = mysqli_fetch_array ($sql, MYSQLI_ASSOC);?>
                <form id="updateprofile" action="updateprofile.php" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <div class="container">
                      <div class="row flex-lg-nowrap">
                        <div class="col">
                          <div class="row">
                            <div class="col mb-3">
                              <div class="card">
                                <div class="card-body">
                                  <div class="e-profile">
                                    <div class="row">
                                      <div class="col-12 col-sm-auto mb-3">
                                        <div
                                          class="mx-auto"
                                          style="width: 140px;"
                                        >
                                          <div>
                                            
                                          <?php
           
             echo  "<img width='140px' src='".$row['PICTURE']."' id='preview' alt='No Cover Image'/>";
             
            ?>               
                                          </div>

                                        </div>
                                      </div>
                                      <div
                                        class="col d-flex flex-column flex-sm-row justify-content-between mb-3"
                                      >
                                        <div
                                          class="text-center text-sm-left mb-2 mb-sm-0"
                                        >
                                          <h4
                                            class="pt-sm-2 pb-1 mb-0 text-nowrap" style='text-transform: capitalize;'
                                          >
                                            <?php echo $row['FIRST_NAME']. " " . $row['LAST_NAME']; ?>
                                          </h4>
                                          <p class="mb-0">
                                            <?php echo $row['EMAIL'];?>
                                          </p>
                                          <div class="text-muted">
                                            <small>Last seen 2 hours ago</small>
                                          </div>
                                          <div class="mt-2">
                                            <input 
                                              class="inputfile"
                                              type="file"
                                              name="file"
                                              id="file"
                                              accept="image/*"
                                              onchange="document.getElementById('preview').src = window.URL.createObjectURL(this.files[0])"
                                            />
                                            <label
                                              class="btn "
                                              for="file"
                                              class="inputfile-label"
                                            >
                                              <i class="fa fa-fw fa-camera"></i>
                                              <span>Change Photo</span>
                                            </label>
                                          </div>
                                        </div>
                                        <div class="text-center text-sm-right">
                                          <span
                                            class="badge badge-secondary bc6"
                                            >@Fundea</span
                                          >
                                          <div class="text-muted">
                                            <small>Joined: <?php echo $row['TRN_DATE'];?></small>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <ul class="nav nav-tabs">
                                      <li class="nav-item">
                                        <a href="" class="active nav-link"
                                          >Settings</a
                                        >
                                      </li>
                                    </ul>
                                    <div class="tab-content pt-3">
                                      <div class="tab-pane active">
                                        <form class="form" novalidate="">
                                          <div class="row">
                                            <div class="col">
                                              <div class="row">
                                                <div class="col">
                                                  <div class="form-group">
                                                    <label>First Name</label>
                                                    <input
                                                      class="form-control"
                                                      style='text-transform: capitalize;'
                                                      type="text"
                                                      id="firstname"
                                                      name="firstname"
                                                      value="<?php echo $row['FIRST_NAME'];?>"
                                                      placeholder=""
                                                    />
                                                  </div>
                                                </div>
                                                <div class="col">
                                                  <div class="form-group">
                                                    <label>Last Name</label>
                                                    <input
                                                      class="form-control"
                                                      style='text-transform: capitalize;'
                                                      type="text"
                                                      id="lastname"
                                                      name="lastname"
                                                      value="<?php echo $row['LAST_NAME'];?>"
                                                      placeholder=""
                                                    />
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="col">
                                                  <div class="form-group">
                                                    <label>Email</label>
                                                    <input
                                                      class="form-control disabled"
                                                      type="text"
                                                      name="email"
                                                      value="<?php echo $row['EMAIL'];?>"
                                                      placeholder=""
                                                    />
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="col mb-3">
                                                  <div class="form-group">
                                                    <label>About</label>
                                                    <textarea
                                                      class="form-control"
                                                      rows="5"
                                                      name="bio"
                                                      value="<?php echo $bio = $row['BIO'];?>"
                                                    ><?php echo $bio = $row['BIO'];?></textarea>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row">
                                           
                                          </div>
                                          <div class="row">
                                            <div
                                              class="message_box col d-flex justify-content-end"
                                            >
                                              
                                            </div>
                                          </div>
                                        </form>
                                        <button
                                                class="btn btn-primary"
                                                type="submit" id="update_profile" name="update_profile"
                                              >
                                                Save Changes
                                              </button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <script type="text/javascript"
                    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

                <script type="text/javascript">
                    $(document).ready(function () {
                      var delay = 2000; 
                      // Handle form submit and validation
                        $("#updateprofile").on('submit', function (e) {
                            e.preventDefault();
                            let firstname = $("#firstname").val();
                            let lastname = $("#lastname").val();
                            let bio = $("#bio").val();

                            if (firstname == "" || lastname == "") {
                                
                                swal("error!", "Empty fields are not allowed", "error");
                                } else {
                            $.ajax({
                                url: "updateprofile.php",
                                type: "POST",
                                data: new FormData(this),
                                contentType: false,
                                cache: false,
                                processData: false,
                                beforeSend: function () {
                                    $('.message_box').html(
                                        '<img src="assets/images/preloader.gif" width="50" height="50"/>'
                                    );
                                },
                                success: function (data) {
                                    setTimeout(function() {
                                    $('.message_box').html(data);
                                    // $("#new-campaign")[0].reset();
                                }, delay);
                                }
                            }
                            );
                            }
                        });
                    });
                    </script>
                </form>  
                
                <div class="py-4"></div>
                </div>
              </div>
              <div class="btn-toolbar justify-content-between">
                <div class="btn-group"></div>
                <div class="btn-group">
                  <div
                    class="dropdown-menu dropdown-menu-right"
                    aria-labelledby="btnGroupDrop1"
                  >
                    <a class="dropdown-item" href="#"
                      ><i class="fa fa-globe"></i> Public</a
                    >
                    <a class="dropdown-item" href="#"
                      ><i class="fa fa-users"></i> Friends</a
                    >
                    <a class="dropdown-item" href="#"
                      ><i class="fa fa-user"></i> Just me</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!--- \\\\\\\Post-->
          <div class="card gedf-card">
            <div class="card-header"></div>
          </div>
          <!-- Post /////-->
        </div>
        <div class="col-md-3">
          <div class="card" style="width: 18rem;">
            <img
              class="card-img-top"
              src="assets/images/handshake.jpg"
              alt="Card image cap"
            />
            <div class="card-body">
              <h5 class="card-title">other campangn title</h5>
              <p class="card-text">
                Some quick fundea text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a href="#" class="btn">read more</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="profilemargin "></div>

    <?php
    require 'footer.php'
    ?>
  </body>
  <script src="assets/js/jquery-3.4.1.slim.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script type="text/javascript" src="/assets/mdb.js"></script>
  <script type="text/javascript" src="/assets/js/myscripts.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="assets/js/ajax.js"></script>
  <script src="assets/js/wow.js"></script>

  <!-- <script>
    $(".upld-file").change(function(event) {
      var ev = event.target;

      if (this.files && this.files[0]) {
        var reader = new FileReader();
        reader.onload = imageIsLoaded;
        reader.readAsDataURL(this.files[0]);
      }

      function imageIsLoaded(e) {
        $(ev)
          .parent()
          .siblings(".fea-img")
          .attr("src", e.target.result);
      }
    });
  </script> -->
</html>
