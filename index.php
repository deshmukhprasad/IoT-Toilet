<?php 
    include 'include/connect.php';

 ?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Toilet Health</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!--  CSS for Index Page     -->
    <link href="assets/css/index.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/tinsert.css">


    <script>

    function showToilets() {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("main").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","table.php",true);
        xmlhttp.send();
    }

    function ToiletDetails(str) {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("main").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","toilet.php?tid=" + str,true);
        xmlhttp.send();
    }

    function SearchFunction() {
      // Declare variables 
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");

      // Loop through all table rows, and hide those who don't match the search query
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        } 
      }
    }

    function addToilet(argument) {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("main").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","tinsert.php",true);
        xmlhttp.send();
    }

    function addUser(argument) {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("main").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","cinsert.php",true);
        xmlhttp.send();
    }

</script>


</head>
<body onload="showToilets()">

<div class="wrapper">
    <div class="sidebar" data-color="azure" >
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="" class="simple-text">
                    IOT-Toilet<br>
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href='javascript:;' onclick='showToilets();'>
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li >
                    <a href='javascript:;' onclick='addToilet();'>
                        <i class="pe-7s-note2"></i>
                        <p>Add Toilet</p>
                    </a>
                </li>
                <li >
                    <a href='javascript:;' onclick='addUser();'>
                        <i class="pe-7s-user"></i>
                        <p>Add User</p>
                    </a>
                </li>
            </ul></div>
    </div>
    <div class="main-panel" id="main"></div>
</div>


</body>
</html>
