<?php
include "databaseconnect.php";


 $banner=$_FILES['banner']['name']; 
 $expbanner=explode('.',$banner);
 $bannerexptype=$expbanner[1];
 date_default_timezone_set('Australia/Melbourne');
 $date = date('m/d/Yh:i:sa', time());
 $rand=rand(10000,99999);
 $encname=$date.$rand;
 $bannerpath="product/".$banner;
 move_uploaded_file($_FILES["banner"]["tmp_name"],$bannerpath);

  
$image = $_FILES['banner']['name'];
$name =		$_POST["name"];
$Price =		$_POST["Price"]; 
$addedDateTime		=	date("F j, Y, g:i a"); 

$stmt=$conn->prepare("insert into covidproduct (image,name,Price,addedDateTime)values(:image,:name,:Price,:addedDateTime)");
$stmt->bindparam(":image",$image);
$stmt->bindparam(":name",$name);
$stmt->bindparam(":Price",$Price);
$stmt->bindparam(":addedDateTime",$addedDateTime);
$stmt->execute();

		header("location:index.php?msg=1");
		exit;
?>