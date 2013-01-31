<?php //
session_start();
?>
<html><head><title> <?php /* Passing a value through a URL. */ echo $_SESSION['username']; ?> </title></head>
<body background = "BG.gif">
<?php
	echo "<center>";
	include "Header.php";
	include "EventPage.php";
	include "Footer_Online.php";
	echo "</center>";
?>
</body>
</html>