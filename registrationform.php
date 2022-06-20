<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Register Here</title> 

    <!-- Icons font CSS-->
    <link href="Login and Register/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="Login and Register/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="Login and Register/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="Login and Register/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="Login and Register/css/main.css" rel="stylesheet" media="all">
        <link rel="stylesheet" type="text/css" href="client/file.css">
</head>
<style type="text/css">
    .bg-gra-02 {
    background: -webkit-gradient(linear, left bottom, right top, from(#fc2c77), to(#6c4079));
    background: -webkit-linear-gradient(bottom left, #fc2c77 0%, #6c4079 100%);
    background: -moz-linear-gradient(bottom left, #fc2c77 0%, #6c4079 100%);
    background: -o-linear-gradient(bottom left, #fc2c77 0%, #6c4079 100%);
        background: linear-gradient(to top right, #e2e0e1 0%, #eee3f1 100%);
}
</style>
<body style="background: linear-gradient(to top right, #f9f5f5 0%, #ad93b5 100%);">
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Register Here</h2>
                    <form action="client/dashboard.php">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">first name</label>
                                    <input class="input--style-4" type="text" name="first_name">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">last name</label>
                                    <input class="input--style-4" type="text" name="last_name">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                               <div class="col-2">
                                <div class="input-group">
                                    <label class="label">middle name</label>
                                    <input class="input--style-4" type="text" name="last_name">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Birthday</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="birthday">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-4" style="width: 100%">
                                <div class="input-group">
                                    <label class="label">Complete Address</label>
                                    <input class="input--style-4" type="text" name="add">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Contact Number</label>
                                    <input class="input--style-4" type="text" name="phone">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">email Address</label>
                                    <input class="input--style-4" type="text" name="first_name">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">civil Status</label>
                                    <input class="input--style-4" type="text" name="last_name">
                                </div>
                            </div>
                             <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Age</label>
                                    <input class="input--style-4" type="text" name="age">
                                </div>
                            </div>

                             <div class="col-2">
                                <div class="input-group">
                                    <label class="label">user Name</label>
                                    <input class="input--style-4" type="text" name="">
                                </div>
                            </div>
                             <div class="col-2">
                                <div class="input-group">
                                    <label class="label">password</label>
                                    <input class="input--style-4" type="password" name="l">
                                </div>
                            </div>
                             <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-space">
                             <div class="col-12">
                                <div class="input-group">
                                    <div class="p-t-10">
                                        <input type="file" id="file" />
                                    <label for="file" class="btn-2"><i class="fa fa-file-image"></i> Avatar</label>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                       <!-- <div class="input-group">
                            <label class="label">Subject</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="subject">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>Subject 1</option>
                                    <option>Subject 2</option>
                                    <option>Subject 3</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        !-->
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                        <div class="a" style="margin-left: 60%; margin-top: -5%; ">
                        <b><a href="index.php" style="color:#2c6ed5">I already have an Account.</a></b>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="Login and Register/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="Login and Register/vendor/select2/select2.min.js"></script>
    <script src="Login and Register/vendor/datepicker/moment.min.js"></script>
    <script src="Login and Register/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="Login and Register/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->