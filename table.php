<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Light Bootstrap Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    
    <link href="assets/css/index.css" rel="stylesheet" />

    <link href="assets/css/tinsert.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />


</head>
<body>


    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">List of Toilets</h4>
                <input type="text" id="myInput" onkeyup= "SearchFunction()" placeholder="Search using location..">
             </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-hover table-striped" id="myTable">
                    <thead>
                        <th>Toilet ID</th>
                    	<th>Location</th>
                    	<th>Cleaner's Name</th>
                    </thead>
                    <tbody>
                <?php
                include 'include/connect.php';
                $sql="SELECT tid, tloc, cname FROM Cleaner, Toilet WHERE Toilet.cid = Cleaner.cid";
                $result = mysqli_query($con,$sql);
                print_r(mysqli_error($con));
                    while($row = mysqli_fetch_array($result)) {
                        echo "<tr style=\"cursor: pointer;\" onclick= \"ToiletDetails(" .$row['tid']. ")\">";
                        echo "<td>" . $row['tid']. "</td>";    
                        echo "<td>" . $row['tloc']. "</td>";
                        echo "<td>" . $row['cname']. "</td>";
                        echo "</tr>"; 
                        }
                        mysqli_close($con);
                ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
