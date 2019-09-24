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
    <link rel="stylesheet" href="assets/css/colorstyle.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/mdb.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" />
    <link rel="stylesheet" href="assets/mdb.css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700,800|Vollkorn:900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/mystyle.css" />
    <style type="text/css">
        #new-campaign fieldset:not(:first-of-type) {
            display: none;
        }
    </style>
</head>

<body style="background-color: rgb(250,248,197)">
   
    <div>

        <div>
            <h2 class="mt-5" style="text-align:center; color: #532C0B"> Start your Campaign </h2>
        </div>
        <hr>

        <!-- Multi step create a campaign -->
        <div class="container p-5 mb-5" style="width: 75%; border-radius: 20px; background-color: whitesmoke">
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated active" role="progressbar"
                    aria-valuemin="0" aria-valuemax="100" style="background-color: #532C0B"></div>
            </div>
            <form id="new-campaign" action="project.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <h2 style="color: #532C0B">Step 1: Campaign Details</h2>
                    <div class="form-group">
                        <label for="text">Campaign Title*</label>
                        <input type="text" class="form-control" id="camptitle" name="camptitle" value="">
                    </div>
                    <div class="form-group">
                        <label for="textarea">Campaign Description*</label>
                        <textarea class="form-control" rows="5" id="campdesc" name="campdesc" value=""></textarea>
                    </div>
                    <div class="form-group">
                        <select class="browser-default custom-select mb-2" style="width: 200px" id="campcat"
                            name="campcat">
                            <option selected="selected">Define Category</option>
                            <option value="Agriculture & Nature">Agriculture & Nature</option>
                            <option value="Art & Entertainment">Art & Entertainment</option>
                            <option value="Events">Events</option>
                            <option value="Humanitarian">Humanitarian</option>
                            <option value="Innovation">Innovation</option>
                            <option value="Medical">Medical</option>
                            <option value="Politics">Politics</option>
                            <option value="Religious">Religious</option>
                            <option value="Sports">Sports</option>
                            <option value="Technology">Technology</option>
                        </select>
                    </div>
                    <input type="button" class="next btn btn-info" style="border-radius: 15px" value="Next" />
                </fieldset>
                <fieldset>
                    <h2 style="color: #532C0B"> Step 2: Add Campaign Goals</h2>
                    <div class="form-group">
                        <select class="browser-default custom-select mb-4" style="width: 200px" name="location"
                            id="location">
                            <option selected="selected">Select Location</option>
                            <option value='Abia'>Abia</option>
                            <option value='Adamawa'>Adamawa</option>
                            <option value='AkwaIbom'>AkwaIbom</option>
                            <option value='Anambra'>Anambra</option>
                            <option value='Bauchi'>Bauchi</option>
                            <option value='Bayelsa'>Bayelsa</option>
                            <option value='Benue'>Benue</option>
                            <option value='Borno'>Borno</option>
                            <option value='CrossRivers'>CrossRivers</option>
                            <option value='Delta'>Delta</option>
                            <option value='Ebonyi'>Ebonyi</option>
                            <option value='Edo'>Edo</option>
                            <option value='Ekiti'>Ekiti</option>
                            <option value='Enugu'>Enugu</option>
                            <option value='FCT-Abuja'>FCT-Abuja</option>
                            <option value='Gombe'>Gombe</option>
                            <option value='Imo'>Imo</option>
                            <option value='Jigawa'>Jigawa</option>
                            <option value='Kaduna'>Kaduna</option>
                            <option value='Kano'>Kano</option>
                            <option value='Katsina'>Katsina</option>
                            <option value='Kebbi'>Kebbi</option>
                            <option value='Kogi'>Kogi</option>
                            <option value='Kwara'>Kwara</option>
                            <option value='Lagos'>Lagos</option>
                            <option value='Nasarawa'>Nasarawa</option>
                            <option value='Niger'>Niger</option>
                            <option value='Ogun'>Ogun</option>
                            <option value='Ondo'>Ondo</option>
                            <option value='Osun'>Osun</option>
                            <option value='Oyo'>Oyo</option>
                            <option value='Plateau'>Plateau</option>
                            <option value='Rivers'>Rivers</option>
                            <option value='Sokoto'>Sokoto</option>
                            <option value='Taraba'>Taraba</option>
                            <option value='Yobe'>Yobe</option>
                            <option value='Zamfara'>Zamafara</option>
                        </select>
                    </div>
                    <div class="form-group text-center">
                        <div class="input-group mx-0 my-3" style="width: 200px">
                            <span class="input-group-addon pt-2 "
                                style="min-width: 35px  ; background-color: rgb(85,55,18); border-radius: 10%; color: aliceblue">&#8358;</span>
                            <input type="number" value="" min="0" step="1" data-number-to-fixed="2"
                                data-number-stepfactor="100" class="form-control currency" id="goal" name="goal" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row" style="width: inherit">
                            <label class="col-md-12" for="date">From:</label>
                            <input type="date" name="startdate" id="startdate" class="form-control mb-4 mx-3 pr-3"
                                style="width: 200px" min="2019-09-20"><br>
                        </div>
                        <div class="row" style="width: inherit">
                            <label class="col-md-12" for="date">To:</label>
                            <input type="date" name="closedate" id="closedate" class="form-control mb-2 mx-3 pr-3"
                                style="width: 200px" min="2019-09-20"><br>
                        </div>
                    </div>
                    <input type="button" name="previous" style="border-radius: 15px" class="previous btn btn-default"
                        value="Previous" />
                    <input type="button" name="next" style="border-radius: 15px" class="next btn btn-info"
                        value="Next" />
                </fieldset>
                <fieldset>
                    <h2 style="color: #532C0B"> Step 2: Add Campaign Image</h2>
                    <div class="form-group text-center">
                    <img id="preview" src="assets/images/upload.jpg" style="height: 200px" /><br>
                        <input class="btn btn-success inputfile" id="uploadImage" type="file" accept="image/*" name="image"  onchange="document.getElementById('preview').src = window.URL.createObjectURL(this.files[0])" />
                        <label class="btn "
                            for="uploadImage"
                                              class="inputfile-label"
                                            >
                                              <i class="fa fa-fw fa-camera"></i>
                                              <span>Add image</span>
                                            </label>
                    </div>
                    <input type="button" name="previous" style="border-radius: 15px" class="previous btn btn-default"
                        value="Previous" />
                    <input type="submit" name="submit" style="border-radius: 15px" class="submit btn btn-success"
                        value="Submit" />
                    <div class="message_box text-center" id="err" style="margin:5px 0px;"></div>
                </fieldset>

                <!-- JQuery -->
                <script type="text/javascript"
                    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

                <script type="text/javascript">
                    $(document).ready(function () {
                        var delay = 2000;

                        var form_count = 1, form_count_form, next_form, total_forms;
                        total_forms = $("fieldset").length;
                        $(".next").click(function () {
                            form_count_form = $(this).parent();
                            next_form = $(this).parent().next();
                            next_form.show();
                            form_count_form.hide();
                            setProgressBar(++form_count);
                        });
                        $(".previous").click(function () {
                            form_count_form = $(this).parent();
                            next_form = $(this).parent().prev();
                            next_form.show();
                            form_count_form.hide();
                            setProgressBar(--form_count);
                        });
                        setProgressBar(form_count);
                        function setProgressBar(curStep) {
                            var percent = parseFloat(100 / total_forms) * curStep;
                            percent = percent.toFixed();
                            $(".progress-bar")
                                .css("width", percent + "%")
                                .html(percent + "%");
                        }

                        // Handle form submit and validation
                        $("#new-campaign").on('submit', function (e) {
                            e.preventDefault();
                            let camptitle = $("#camptitle").val();
                            let campdesc = $("#campdesc").val();
                            let campcat = $("#campcat").val();
                            let location = $("#location").val();
                            let goal = $("#goal").val();
                            let startdate = $("#startdate").val();
                            let closedate = $("#closedate").val();
                            
        

                            if (camptitle == "" || campdesc == "" ||campcat == "" ||location == "" ||goal == "" ||startdate == "" ||closedate == "") {
                                
                                swal("error!", "Empty fields are not allowed", "error");
                                } else {
                            $.ajax({
                                url: "project.php",
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
        </div>


    </div>


    <script src="assets/js/jquery-3.4.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="/assets/mdb.js"></script>
    <script type="text/javascript" src="/assets/js/myscripts.js"></script>
    <script src="assets/js/wow.js"></script>
    <!-- Sweet Alert -->
    <script src="assets/js/ajax.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>