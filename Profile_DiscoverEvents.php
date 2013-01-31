<?php //
session_start();
?>
<html><head><title> <?php /* Passing a value through a URL. */ echo $_SESSION['username']; ?> </title></head>
<body background = "BG.gif">
<?php
	echo "<center>";
	include "Header_Online.php";
	include "DiscoverEvents.php";
	include "Footer_Online.php";
	echo "</center>";
?>
</body>
</html>


