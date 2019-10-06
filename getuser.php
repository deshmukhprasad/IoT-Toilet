<!DOCTYPE html>
<head>
<style>

table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}

</style>
</head>
<body>
<div id="rest" style="width:99%">
<?php
$q = intval($_GET['q']);
$con = mysqli_connect('localhost','root','','toilet');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT * FROM Cleaner WHERE cid ='".$q."'";
$result = mysqli_query($con,$sql);
/*echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Address</th>
</tr>";*/

while($row = mysqli_fetch_array($result)) {
    //echo "<tr>";
echo "<div align='center'><b>" . $row['cid']. "<br>";
echo "<br>";	
echo "<div align='center'><b>" . $row['cname']. "<br>";
echo "<br>";
echo "<div align='center'><b>" . $row['cage']. "<br>";
echo "<br>";
echo "<div align='center'><b>" . $row['caddr']. "<br>";  
echo "<br>";
echo "<div align='center'><b>" . $row['cphone']. "<br>";
echo "<br>"; 
}
mysqli_close($con);
?>
</div>
</body>
</html>
