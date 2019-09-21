<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>funea</title>
    <title>funea</title>


    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/mdb.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" />
    <link href="assets/mdb.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700,800|Vollkorn:900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/mystyle.css" />
    <link rel="stylesheet" href="assets/css/colorstyle.css" />
</head>

<body style="background-color: rgb(250,248,197)">
  <?php
  require 'nav-user.php';
  ?>
    <!-- Navbar -->



    <div class="container-fluid gedf-wrapper mt-5">
        <div class="row">
            <div class="col-md-3">
                <div class="card" style="width: auto; background-color: rgb(85,55,18)">
                    <img src="assets/images/rty-Recovered.jpg" class="card" alt="Paris"
                        style="height: 170px; z-index: 1;position: inherit  ; margin: auto; ;top: 3em;border-radius: 50%; border: 5px solid #ddd;" />

                    <div class="bg-white" style="height: fit-content">
                        <h3 class="fsm"
                            style="  text-transform: capitalize; margin-top: 50px!important; text-align:center">
                            imonigie theodore</h3>
                        <hr>
                    </div>
                    <div class="card-body" style="background-color: rgb(255, 255, 255)">
                        <h4 class="card-title">hydrogen</h4>
                        <p class="card-text">
                            Some fundea text some fundea text. okoye is an architect
                            and engineer
                        </p>
                        <a href="#" class="btn">See Profile</a>
                    </div>
                </div>
                <br />
            </div>
            <div class="col-md-6 gedf-main">
                <!--- \\\\\\\Post-->
                <div class="card gedf-card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab"
                                    aria-controls="posts" aria-selected="true">Make a publication</a>
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
                                <div>
                                    <a href="#" class="btn">add a <strong>Campagne</strong></a>
                                </div>

                                <hr>
                                <div class="row">
                                    <div class="col">
                                        <div class="card" style="width: 18rem;">
                                            <img class="card-img-top" src="assets/images/handshake.jpg"
                                                alt="Card image cap" />
                                            <div class="card-body">
                                                <h5 class="card-title">other campangn title</h5>
                                                <p class="card-text">
                                                    Some quick fundea text to build on the card title
                                                    and make up the bulk of the card's content.
                                                </p>
                                                <a href="#" class="btn">read more</a>
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
                                                                                <div class="d-flex justify-content-center align-items-center rounded"
                                                                                    style="height: 140px; background-color: rgb(233, 236, 239);">
                                                                                    <img src="assets/images/rty-Recovered.jpg"
                                                                                        alt="Paris"
                                                                                        style="height: 140px"> </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                                                            <div
                                                                                class="text-center text-sm-left mb-2 mb-sm-0">
                                                                                <h4
                                                                                    class="pt-sm-2 pb-1 mb-0 text-nowrap">
                                                                                    okoye-thoe</h4>
                                                                                <p class="mb-0">@okoya-theo.s</p>
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
                                                                                    <small>Joined 09 Dec 2017</small>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="nav nav-tabs">
                                                                        <li class="nav-item">
                                                                            <a href=""
                                                                                class="active nav-link">Settings</a>
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
                                                                                                    <label>Full
                                                                                                        Name</label>
                                                                                                    <input
                                                                                                        class="form-control"
                                                                                                        type="text"
                                                                                                        name="name"
                                                                                                        placeholder="theo"
                                                                                                        value="crazy scripts" />
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col">
                                                                                                <div class="form-group">
                                                                                                    <label>Username</label>
                                                                                                    <input
                                                                                                        class="form-control"
                                                                                                        type="text"
                                                                                                        name="username"
                                                                                                        placeholder="okoya-theo.s"
                                                                                                        value="okoya-theo.s" />
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
                                                                                                        placeholder="user@fundea.com" />
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
                                                                                                        placeholder="My Bio"></textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div
                                                                                        class="col-12 mb-3 col-md-11 col-sm-12">
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
                        <div class="btn-toolbar justify-content-between">
                            <div class="btn-group"></div>
                            <div class="btn-group">
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
                                    <a class="dropdown-item" href="#"><i class="fa fa-globe"></i> Public</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-users"></i> Friends</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Just me</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Post /////-->

                <!--- \\\\\\\Post-->
                <div class="card gedf-card">
                    <!--
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="" />
                                </div>
                                <div class="ml-2">
                                    <div class="h5 m-0">@LeeCross</div>
                                    <div class="h7 text-muted">Miracles Lee Cross</div>
                                </div>
                            </div>
                            <div>
                                <div class="dropdown">
                                    <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                        <div class="h6 dropdown-header">Configuration</div>
                                        <a class="dropdown-item" href="#">Save</a>
                                        <a class="dropdown-item" href="#">Hide</a>
                                        <a class="dropdown-item" href="#">Report</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
-->
                </div>
                <!-- Post /////-->

                <!--- \\\\\\\Post-->

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
<script src="assets/js/wow.js"></script>

<script>
    $(".upld-file").change(function (event) {
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
</script>

</html>
