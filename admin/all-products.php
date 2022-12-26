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
		
	<style>
  .pencil 
{
  position: relative;
  display: inline-block;
  color:blue;
}

.pencil .tooltiptext 
{
  visibility: hidden;
  width: 120px;
  background-color: #8e24aa;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -60px;
  opacity: 0;
  transition: opacity 0.3s;
}

.pencil .tooltiptext::after
{
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

.pencil:hover .tooltiptext 
{
  visibility: visible;
  opacity: 1;
}

  </style>
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
                                        <li class="active"> <a href="index.php">Add Products</a> </li>
                                        <li> <a href="all-products.php">All Products</a> </li>
                                        <li><a href="all-orders.php">All Orders</a></li>
                                        
                                        
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
                        <h2>All Products</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="brand-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 margin">
                        
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 margin">
									<?php
									if(@$_REQUEST["msg"]==1)
									{
									?>
									<div class="alert alert-success alert-dismissible fade show" role="alert">
									<strong>Success!</strong> Product Edited Successfuly. 
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
									</div>
									<?php
									}
									?>
									<?php
									if(@$_REQUEST["msg"]==2)
									{
									?>
									<div class="alert alert-success alert-dismissible fade show" role="alert">
									<strong>Success!</strong> Product Deleted Successfuly. 
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
									</div>
									<?php
									}
									?>
								   <table id="example" class="table table-bordered" style="width:100%">
							<thead>
								<tr>
									<th>#</th>
									<th>Product Name</th>
									<th>Product Image</th>
									<th>Product Price</th>
									<th>Date</th>
									<th>Operations</th>
								</tr>
							</thead>
							<tbody>
							<?php
								$stmt=$conn->prepare("select * from covidproduct;");
								$stmt->execute();
								while($row=$stmt->fetch())
									
								{
								?>
								<tr>
									<td><?php echo $row["productId"]; ?></td>
									<td><?php echo $row["name"]; ?></td>
									<td style="width:40%;" >
											   <img style="width:50%; border-radius:35px;height:118px;"  src="product/<?php echo $row["image"]; ?>"/>
											  </td>
									<td><?php echo $row["Price"]; ?></td>
									<td><?php echo $row["addedDateTime"]; ?></td>
									<td><a href="delete-product.php?productId=<?php echo $row["productId"];?>"><i class="fa fa-trash-o pencil"><span class="tooltiptext">Delete</span></i></a></td>
								</tr>
								<?php
							}
							$conn=null;
							$stmt=null;
							?>
							</tbody>
						</table>
						<script>
						$(document).ready(function() {
						$('#example').DataTable();
					} );
						</script>
                   
					</div>
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 margin">
                        
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