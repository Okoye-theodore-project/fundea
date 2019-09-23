<?php require 'server.php';
	  include 'session.php';

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
    <link rel="stylesheet" href="assets/css/mystyle.css" />
    <link rel="stylesheet" href="assets/css/colorstyle.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/mdb.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" />
    <link href="assets/mdb.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700,800|Vollkorn:900&display=swap"
        rel="stylesheet" />
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
        <div class="container">
            <!-- Brand --><a class="navbar-brand" href="index.php" target="_blank"><img src="assets/images/4x.png"
                    style="height: 35px ; width:inherit" alt="" /></a><!-- Collapse -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="#">Discover<span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="campaign.html" target="_blank">Start a Campaign</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" target="_blank">Blog </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" target="_blank">About Us</a>
                    </li>
                </ul>

                <!-- Right -->
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item">
                        <a href="https://www.facebook.com/mdbootstrap" class="nav-link" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://twitter.com/MDBootstrap" class="nav-link" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link border border-light rounded"
                            style="padding-right: 20px !important; padding-left: 20px !important">
                            Log Out
                        </a>
                    </li>
                    <li class="nav-item">
                        <!-- <div id="wrap" class="nav-link border border-light rounded">
                                  <form action="" autocomplete="on">
                                  <input id="search" name="search" type="text" placeholder="What're we looking for ?">
                                  <input id="search_submit" value="Rechercher" type="submit">
                                  <i class="fas lni-search active" aria-hidden="true"
                                  style="padding: 9px !important"></i>
                                  </form>
                                </div>  -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar -->

    <div class="container-fluid gedf-wrapper mt-5">
        <div class="row">
            <div class="col-md-3">
                <div class="card" style="width: auto; background-color: rgb(85,55,18)">
                    <img src="<?php echo $picture = "<img src='photo/".$row['PICTURE']." alt='image'image'>"; ?>" class="card" alt="Paris"
                        style="height: 170px; z-index: 1;position: inherit  ; margin: auto; ;top: 3em;border-radius: 50%; border: 5px solid #ddd;" />

                    <div class="bg-white" style="height: fit-content">
                        <h3 class="fsm"
                            style="  text-transform: capitalize; margin-top: 50px!important; text-align:center"><?php echo $row['FIRST_NAME']. " " . $row['LAST_NAME']; ?></h3>
                        <hr>
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
            <div class="col-md-6 gedf-main mt-5">
                <!--- \\\\\\\Post-->
                <div class="card gedf-card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab"
                                    aria-controls="posts" aria-selected="true">Your Campaigns</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="images-tab" data-toggle="tab" role="tab" aria-controls="images"
                                    aria-selected="false" href="#images">Edit Profile</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="posts" role="tabpanel"
                                aria-labelledby="posts-tab">
                                <div class="row">
                                    <div class="col">
                                        <div class="card" style="width: 18rem;">
                                            <img class="card-img-top" src="assets/images/handshake.jpg"
                                                alt="Card image cap" />
                                            <div class="card-body">
                                                <h5 class="card-title">other Campaign title</h5>
                                                <p class="card-text">
                                                    Some quick example text to build on the card title
                                                    and make up the bulk of the card's content.
                                                </p>
                                                <a href="#" class="btn btn-primary">read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="images" role="tabpanel" aria-labelledby="images-tab">
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
                                                                            <div class="mx-auto" style="width: 140px;">
                                                                                <div class="d-flex justify-content-center align-items-center rounded rounded-circle z-depth-1-half avatar-pic"
                                                                                    style="height: 140px; background-color: rgb(233, 236, 239);">
                                                                                    <?php echo $picture = "<img src='photo/".$row['PICTURE']." alt='image'image'>"; ?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                                                            <div
                                                                                class="text-center text-sm-left mb-2 mb-sm-0">
                                                                                <h4
                                                                                    class="pt-sm-2 pb-1 mb-0 text-nowrap">
<?php echo $row['FIRST_NAME']. " " . $row['LAST_NAME']; ?></h4>
                                                                                <p class="mb-0"><?php echo $row['EMAIL']; ?></p>
                                                                                <div class="text-muted">
                                                                                    <small>Last seen 2 hours ago</small>
                                                                                </div>
                                                                                <div class="mt-2">


                                                                                    <input class="inputfile"
                                                                                    type="file" name="file"
                                                                                    id="file" accept="image/*">
                                                                                <label class="btn " for="file"
                                                                                    class="inputfile-label">
                                                                                    <i
                                                                                    class="fa fa-fw fa-camera"></i>
                                                                                <span>Change Photo</span>
                                                                                </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="text-center text-sm-right">
                                                                                <span
                                                                                    class="badge badge-secondary bc6">@Fundea</span>
                                                                                <div class="text-muted">
                                                                                    <?php echo 'Joined ' . $row['TRN_DATE']; ?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="nav nav-tabs">

                                                                    </ul>
                                                                    <div class="tab-content pt-3">
                                                                        <div class="tab-pane active">
                                                                            <form class="form" novalidate="">
                                                                                <div class="row">
                                                                                    <div class="col">
                                                                                        <div class="row">
                                                                                            <div class="col">
                                                                                                <div class="form-group">
                                                                                                    <label>First
                                                                                                        Name</label>
                                                                                                    <input
                                                                                                        class="form-control"
                                                                                                        type="text"
                                                                                                        name="name"
                                                                                                        value="<?php echo $row['FIRST_NAME']; ?>" />
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col">
                                                                                                <div class="form-group">
                                                                                                    <label>Last
                                                                                                        name</label>
                                                                                                    <input
                                                                                                        class="form-control"
                                                                                                        type="text"
                                                                                                        name="username"
                                                                                                        value="<?php echo $row['LAST_NAME']; ?>" />
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col">
                                                                                                <div class="form-group">
                                                                                                    <label>Email</label>
                                                                                                    <input
                                                                                                        class="form-control"
                                                                                                        type="text"
                                                                                                        value="<?php echo $row['EMAIL']; ?>" />
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
                                                                                                        value="<?php echo $row['BIO']; ?>"></textarea>
                                                                                                    <p
                                                                                                        style="font-size: 12px; color: red;">
                                                                                                        *not more than
                                                                                                        250 characters.
                                                                                                    </p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-12 col-sm-6 mb-3">
                                                                                        <div class="mb-2">
                                                                                            <b>Change Password</b>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col">
                                                                                                <div class="form-group">
                                                                                                    <label>Current
                                                                                                        Password</label>
                                                                                                    <input
                                                                                                        class="form-control"
                                                                                                        type="password"
                                                                                                        placeholder="••••••" />
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col">
                                                                                                <div class="form-group">
                                                                                                    <label>New
                                                                                                        Password</label>
                                                                                                    <input
                                                                                                        class="form-control"
                                                                                                        type="password"
                                                                                                        placeholder="••••••" />
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col">
                                                                                                <div class="form-group">
                                                                                                    <label>Confirm
                                                                                                        <span
                                                                                                            class="d-none d-xl-inline">Password</span></label>
                                                                                                    <input
                                                                                                        class="form-control"
                                                                                                        type="password"
                                                                                                        placeholder="••••••" />
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-12 col-sm-5 offset-sm-1 mb-3">
                                                                                        <div class="mb-2">
                                                                                            <b>Keeping in Touch</b>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col">
                                                                                                <label>Email
                                                                                                    Notifications</label>
                                                                                                <div
                                                                                                    class="custom-controls-stacked px-2">
                                                                                                    <div
                                                                                                        class="custom-control custom-checkbox">
                                                                                                        <input
                                                                                                            type="checkbox"
                                                                                                            class="custom-control-input"
                                                                                                            id="notifications-blog"
                                                                                                            checked="" />
                                                                                                        <label
                                                                                                            class="custom-control-label"
                                                                                                            for="notifications-blog">Blog
                                                                                                            posts</label>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="custom-control custom-checkbox">
                                                                                                        <input
                                                                                                            type="checkbox"
                                                                                                            class="custom-control-input"
                                                                                                            id="notifications-news"
                                                                                                            checked="" />
                                                                                                        <label
                                                                                                            class="custom-control-label"
                                                                                                            for="notifications-news">Newsletter</label>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="custom-control custom-checkbox">
                                                                                                        <input
                                                                                                            type="checkbox"
                                                                                                            class="custom-control-input"
                                                                                                            id="notifications-offers"
                                                                                                            checked="" />
                                                                                                        <label
                                                                                                            class="custom-control-label"
                                                                                                            for="notifications-offers">Personal
                                                                                                            Offers</label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div
                                                                                        class="col d-flex justify-content-end">
                                                                                        <button class="btn btn-primary"
                                                                                            type="submit">
                                                                                            Save Changes
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
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
                                <div class="py-4"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Post /////-->

                <!--- \\\\\\\Post-->
                <div class="card gedf-card">
                    <div class="card-header"></div>
                </div>
                <!-- Post /////-->
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="assets/images/handshake.jpg" alt="Card image cap" />
                    <div class="card-body">
                        <h5 class="card-title">other Campaign title</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up
                            the bulk of the card's content.
                        </p>
                        <a href="#" class="btn btn-primary">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="profilemargin "></div>
</body>
<script src="assets/js/jquery-3.4.1.slim.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="/assets/mdb.js"></script>
<script type="text/javascript" src="/assets/js/myscripts.js"></script>
<script src="assets/js/wow.js"></script>

</html>
