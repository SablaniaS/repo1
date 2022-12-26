<?php
include "databaseconnect.php";
Session_start();
$id=@$_SESSION["id"]; 
if(!$_SESSION["id"])
{
	header("location:log-in.php?err=2");
	exit;
}
$img = $_REQUEST["img"];
$name = $_REQUEST["name"];
$Price = $_REQUEST["Price"];
$userId = $_REQUEST["userId"];



$stmt=$conn->prepare("insert into covidorder(img,name,Price,userId) Values(:img,:name,:Price,:userId)");
$stmt->bindparam(":img",$img);
$stmt->bindparam(":name",$name);
$stmt->bindparam(":Price",$Price);
$stmt->bindparam(":userId",$userId);
$stmt->execute();

header("location:orders.php?msg=1");
exit;
?>