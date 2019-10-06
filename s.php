<?php

include 'connect_database.php';

	$sensorid = $_GET['s'];
	$level = $_GET['l'];

	$insert = "INSERT INTO odour (sensorid, tid, data, ddate, dtime, level) values ('$sensorid', '0', 1, '2019-02-09', '11:00:00', '$level')";

	$run = mysqli_query($conn,$insert);
	
	if ($run)
	{
	    echo "Success in inserting";
	}
	else{
	    echo "Failed !". mysqli_connect_error();
	}

?>