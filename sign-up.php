<!DOCTYPE html>
<?php
include "databaseconnect.php";

?>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>covid</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>
<!-- body -->

<body class="main-layout" style="background-color:gray;">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/load.gif" alt="#" /></div>
    </div>
    <!-- end loader -->


    <!-- brand -->
    <div class="brand">
        <h1 style="text-align:center;margin-top:-30px;"><strong>Covid-19 Essentials</strong></h1><br>
        <div class="brand-bg">
            <div class="container">
                <div class="row">
							<div class="col-md-4 c0l-sm-4">
			  </div>
			   <div class="col-md-4 c0l-sm-4">
				<h1 style="text-align:center;color:#136af8;"><b>Sign Up Form</b></h1><br>
				<form action="sign-up-process.php" method="post">
				  <div class="form-group">
					<label for="exampleInputEmail1"><strong>User Name</strong></label>
					<input type="text" class="form-control" id="exampleInputEmail1" name="User" aria-describedby="emailHelp" placeholder="User Name">
				  </div>
				  <div class="form-group">
					<label for="exampleInputEmail1"><strong>Mobile Number</strong></label>
					<input type="text" class="form-control" id="exampleInputEmail1" name="Mobile" aria-describedby="emailHelp" placeholder="Mobile Number">
				  </div>
				  <div class="form-group">
					<label for="exampleInputEmail1"><strong>Email Id</strong></label>
					<input type="text" class="form-control" id="exampleInputEmail1" name="Email" aria-describedby="emailHelp" placeholder="Email Id">
				  </div>
				   <div class="form-group">
					<label for="exampleInputEmail1"><strong>Password</strong></label>
					<input type="password" class="form-control" id="exampleInputEmail1" name="Password" aria-describedby="emailHelp" placeholder="Password">
				  </div>
				  
				  <button type="submit" class="btn btn-primary">Sign Up</button>
				</form>
			  </div>
			   <div class="col-md-4 c0l-sm-4">
			  </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
</body>
</html>