<?php
	
	include 'include/connect.php';
	$fname = $_POST['fname'];
	$add = $_POST['add'];
	$age = $_POST['age'];
	$phno = $_POST['phno'];
	$cid = $_POST['cid'];
	$sql = "insert into Cleaner (cid,cname,cage,caddr,cphone) values ('{$cid}','{$fname}','{$age}','{$add}','{$phno}')";
	
	if(mysqli_query($con, $sql)){
		echo "<script type='text/javascript'>window.top.location='index.php';</script>";
		exit();
	}


?>