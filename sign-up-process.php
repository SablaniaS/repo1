<?php
include "databaseconnect.php"; 
$User = $_REQUEST["User"];
$Mobile = $_REQUEST["Mobile"];
$Email = $_REQUEST["Email"];
$Password = $_REQUEST["Password"];



$stmt=$conn->prepare("insert into coviduser(user,mobile,email,password) Values(:User,:Mobile,:Email,:Password)");
$stmt->bindparam(":User",$User);
$stmt->bindparam(":Mobile",$Mobile);
$stmt->bindparam(":Email",$Email);
$stmt->bindparam(":Password",$Password);
$stmt->execute();

header("location:log-in.php?msg=1");
exit;
?>