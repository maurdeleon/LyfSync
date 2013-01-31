<?php // Home: User successfully logs in. 
session_start();
?>
<html><head><title><?php /* Passing a value through a URL. */ echo $_SESSION['username']; ?> </title></title></head>
<body background = "BG.gif">
<?php
	echo "<center>";
	include "Header_Online.php";
	include "Profile_Calendar.php";
	include "Footer_Online.php";
	echo "</center>";
?>
</body>
</html>


