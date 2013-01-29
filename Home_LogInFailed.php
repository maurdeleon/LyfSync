<?php // Home: Log in unsuccessful, User tries again ?>
<html><head><title> LyfSync: Log In </title></head>
<body>
<center>
<?php
	include "Header_LogInFailed.php";
	echo "<table><td>";
	include "TakeATour.php";
	echo "</td><td>";
	include "EventsList.php";
	echo "</td></table>";
	include "Footer_Offline.php";
?>
</center>
</body>
</html>

