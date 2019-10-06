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
        <link rel="stylesheet" type="text/css" href="assets/css/clinsert.css">
</head>
 
<body>
	<?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong>
    	<a href="cinsert.php?logout='1'" style="color: red;">LOGOUT</a> </p>
    <?php endif ?>
	<div class="styl1">
	<h1>Cleaner's Form</h1>	
	<form action='insertc.php' method='post' id='myform' >
	<p>
	<input type='text' name='fname' placeholder='Enter Name' id='fname' required />
	</p>
	
	<p>
	<input type='text' name='add' placeholder='Enter Address' id='add' required />
	</p>
	
	<p>
	<input type='text' name='age' placeholder='Enter Age' id='age' required />
	</p>

	<p>
	<input type='tel' pattern="^\d{10}$" name='phno' placeholder='Enter Phone Number' id='phno' required/>
	</p>

	<p>
	<input type='text' name='cid' placeholder="Enter the Cleaner's ID" id='cid' required />
	</p>

	<button id='insert'>Submit</button>
<script>
// function myFunction() {
//   location.replace("login/register.php")
// }
</script>
	<p id='result'></p>
	</form>
    </div>
    
</body>
	<script src='insertc.js'></script>
</html>