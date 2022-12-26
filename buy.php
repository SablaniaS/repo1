<!DOCTYPE html>
<?php
include "databaseconnect.php";
Session_start();
$id=@$_SESSION["id"]; 
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
	<!-- DC Payment Icons CSS -->
	<link rel="stylesheet" type="text/css" href="http://cdn.dcodes.net/2/payment_icons/dc_payment_icons.css" />

</head>
<!-- body -->

<body class="main-layout ">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/load.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">

            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <h1>Covid-19 Essentials</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li class="active"> <a href="index.php">Home</a> </li>
                                        <li> <a href="">Shop</a> </li>
                                        <li><a href="">Orders</a></li>
											<?php if(@$_SESSION["id"])
										{
										?>
										<li> <a href="log-out.php">Log Out</a> </li>
										<?php									
										}
										else
										{
										?>
										<li> <a href="log-in.php">Log In</a> </li>
										<?php } ?>
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </header>
    <!-- end header -->

    <!-- brand -->
    <div class="brand">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Our Products</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="brand-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 c0l-sm-4">
			  </div>
			   
			   <?php
				if(@$_REQUEST["msg"]==1)
				{
				?>
				<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Success!</strong> Product Added Successfuly. 
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>
				<?php
				}
				?>
				<?php
					$productId = $_REQUEST["productId"];
					$stmt=$conn->prepare("select * from covidproduct where productId=:productId");
					$stmt->bindparam(":productId",$productId);
						$stmt->execute();
						$row=$stmt->fetch();
							
						
				
					$productId = $row["productId"]; 
					$image = $row["image"]; 
					$name = $row["name"]; 
					$Price = $row["Price"];
					$addedDateTime = $row["addedDateTime"];
					 ?>
				<div class="col-md-4 c0l-sm-4">
				<form action="order-process.php" method="post" enctype="multipart/form-data">
				 
                  <div class="brand_box" style="float:left;">
                            <img src="admin/product/<?php echo $image; ?>" alt="img" />
							<input type="hidden" name="img" value="<?php echo $image; ?>"/>
							<input type="hidden" name="name" value="<?php echo $name; ?>"/>
							<input type="hidden" name="Price" value="<?php echo $Price; ?>"/>
							<input type="hidden" name="userId" value="<?php echo $id; ?>"/>
							<h3><?php echo $name; ?></h3>
                            <h3><strong class="red"><?php echo $Price; ?></strong></h3>
							
					<button type="submit" class="btn btn-primary">Place Order</button>
					
                  </div><br><br><br><br><br><br><br>
				   <div><span><strong>Payment Options</strong></span>
							<div style="float:left;">
								<ul>
								<li><span class="dc_payment_icons_glossy_75 dc_visa_glossy" title="Visa"></span></li>
								<li><span class="dc_payment_icons_glossy_75 dc_mastercard_glossy" title="Mastercard"></span></li>
								<li><span class="dc_payment_icons_glossy_75 dc_paypal_glossy" title="PayPal"></span></li>
								<li><span class="dc_payment_icons_glossy_75 dc_visaelectron_glossy" title="Visa Electron"></li>
								</ul>
							</div>&nbsp;
							<div style="float:right;">
								<ul>
								<li><input type="radio" name="j" required /></li><br><br>
								<li><input type="radio" name="j" /></li><br><br>
								<li><input type="radio" name="j" /></li><br><br>
								<li><input type="radio" name="j" /></li><br><br><br><br>
								</ul>
							</div>
							</div>
				</form>
			 
               </div>
				 
			   <div class="col-md-4 c0l-sm-4">
			  </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end brand -->
    
   

    <!-- footer -->
    <footer>
        <div id="contact" class="footer">
            <div class="container">
                <div class="row pdn-top-30">
                    <div class="col-md-12 ">
                        <div class="footer-box">
                            <ul class="location_icon">
                                <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="#"><i class="fa fa-instagram"></i></a></li>

                            </ul>
                            <div class="menu-bottom">
                                <ul class="link">
                                    <li> <a href="#">Home</a></li>
                                    <li> <a href="#">About</a></li>
                                    
                                    <li> <a href="#">Brand </a></li>
                                    <li> <a href="#">Specials  </a></li>
                                    <li> <a href="#"> Contact us</a></li>
                                </ul><br>	
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </footer>
    <!-- end footer -->
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