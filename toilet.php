<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Toilet Health</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />




    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/index.css" rel="stylesheet" />

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" >

</head>
<body>

<div class="wrapper">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">Real Time Data</h4>
                            </div>
                            <div class="content">
                                <div class="ct-chart">
                                <iframe width="100%" height="100%" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/872940/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
<!--                     <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Sensor Data</h4>
                                <p class="category">Intensity of Odour in ppm</p>
                            </div>
                            <div class="content">
                                <div id="chartHours" class="ct-chart">
                                    <table class="table table-hover table-striped" id="myTable">
                                        <thead>
                                            <th>Time</th>
                                            <th>Odour Intensity</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $tid = $_GET['tid'];
                                            $cdate = date('Y-m-d');
                                            $sql="SELECT level, dtime FROM odour WHERE tid = '".$tid."' AND ddate ='".$cdate."'";
                                            $result = mysqli_query($con,$sql);
                                                while($row = mysqli_fetch_array($result)) {
                                                    echo "<tr>";    
                                                    echo "<td>" . $row['dtime']. "</td>";
                                                    echo "<td>" . $row['level']. "</td>";
                                                    echo "</tr>"; 
                                                    }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">Toilet Cleaner</h4>
                                <p class="category">Bio-Data</p>
                            </div>
                            <div class="content">
                                <div class="ct-chart">
                                    <table align="center">
                                        <?php
                                            include 'include/connect.php';
                                            $sql="SELECT * FROM Cleaner, toilet WHERE tid = '".$tid."' AND Cleaner.cid = toilet.cid";
                                            $result = mysqli_query($con,$sql);
                                            $row = mysqli_fetch_array($result);
                                            echo "<tr align=\"center\"><th>Cleaner ID</th><td><b>" . $row['cid']. "</td></tr>";   
                                            echo "<tr align=\"center\"><th>Cleaner Name</th><td><b>" . $row['cname']. "</td></tr>";
                                            echo "<tr align=\"center\"><th>Age</th><td><b>" . $row['cage']. "</td></tr>";
                                            echo "<tr align=\"center\"><th>Address</th><td><b>" . $row['caddr']. "</td></tr>";  
                                            echo "<tr align=\"center\"><th>Phone NO.</th><td><b>" . $row['cphone']. "</td></tr>";
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                

            
            </div>
        </div>
</div>


</body>

</html>
