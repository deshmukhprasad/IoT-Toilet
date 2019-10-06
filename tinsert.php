<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
?>
<!DOCTYPE html>
<head>
	<title>PHP MySQL Insert Tutorial</title>
        <script src='https://code.jquery.com/jquery-2.1.3.min.js'></script>
        <link rel="stylesheet" type="text/css" href="assets/css/tinsert.css">
        <link rel="stylesheet" type="text/css" href="assets/css/index.css">
</head>
 
<body>
	<?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong>
    	<a href="cinsert.php?logout='1'" style="color: red;">LOGOUT</a> </p>
    <?php endif ?>
    <div class="styl">
    <h1>Add Toilet Details</h1>    
	<form action='insertt.php' method='post' id='myform' >
	<p>
	<input type='text' name='tid' placeholder='Toilet ID' id='tid' />
	</p>
	
	<p>
	<input type='text' name='tloc' placeholder='Toilet Location' id='tloc' />
	</p>
	
	<p>
	<input type='text' name='cid' placeholder='Cleaner iD' id='cid' />
	</p>
			
	<button id='insert'>Insert</button>
	
	<p id='result'></p>
	</form>
	</div>
</body>
	<script src='insertt.js'></script>
</html>