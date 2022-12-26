<?php
include "databaseConnect.php";
$productId=$_REQUEST["productId"];	
$stmt1=$conn->prepare("delete from covidproduct where productId=:productId");
$stmt1->bindParam(":productId",$productId);
$stmt1->execute();
	$stmt1=null;
	$conn=null;
header("location:all-products.php?msg=2");
?>