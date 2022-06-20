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
    <title>Pet Shop Login Form</title>

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
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins" style="background:url('bg.jpg');">
        <div class="wrapper wrapper--w680">
            <div class="card card-4" style="width: 100%;
padding: 16px;
padding-left: 40px;
font-size: 18px;
text-align: center;
border: transparent;

border-top-right-radius: 5px;
border-bottom-right-radius: 5px;
background: rgba(105, 105, 105, 0.55);
outline: none;">
                <div class="card-body">
                    <h2 class="title" style="color:#fff;">Login to continue</h2>
                    <form method="POST" action="client/dashboard.php">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" style="color:#fff;">user name</label>
                                    <input class="input--style-4" type="text" name="first_name">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label" style="color:#fff;">password</label>
                                    <input class="input--style-4" type="password" name="last_name">
                                </div>
                            </div>
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit" style="background-color:#fff;color:black;">Submit</button>
                        </div>
                        <div class="a" style="margin-left: 10%; margin-top: 10%; ">
                        <b><a href="registrationform.php" style="color:#fff;">I don't have an account yet!</a></b>
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