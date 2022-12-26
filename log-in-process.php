<?php
include "databaseconnect.php";
?>
<?php
$emailId  = trim($_REQUEST["emailId"]);
$Pass = trim($_REQUEST["Pass"]);


	$stmt=$conn->prepare("select * from coviduser where email=:emailId && password=:Pass");
	$stmt->bindparam(":emailId", $emailId);	
	$stmt->bindparam(":Pass", $Pass);	
	
	$stmt->execute();
	
	$count=$stmt->rowcount();
	$row=$stmt->fetch();

	if($count>0) 
	{
		
		
		session_start();
		$_SESSION["id"] 	= $row["id"]; 
		header("location:index.php?msg=1");
		exit;
		
	}
	else
	{
		$conn=null;
		$stmt=null;
		header("location:log-in.php?err=1");
		exit;
	}
	
	
	exit;
	

?>
