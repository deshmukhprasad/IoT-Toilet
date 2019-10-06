<?php
	include 'include/connect.php';
	$toilid = $_POST['tid'];
	$toilloc = $_POST['tloc'];
	$cleanid = $_POST['cid'];
	$sql = "insert into toilet (tid,tloc,cid) values ('{$toilid}','{$toilloc}','{$cleanid}')";
	
	if(mysqli_query($con, $sql)){
		echo "<script type='text/javascript'>window.top.location='index.php';</script>";
		exit();
	}
	else {
	    echo(mysqli_error($con));
	}
?>