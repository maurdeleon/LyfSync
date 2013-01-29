<?php // Create An Event, Discover Events and Manage Your Events links TABLE - lowerleft-hand side of center container (Profile).
	echo "<table><tr><td style = 'height: 45px'><img src = '/LyfSync/plus.png' style = 'height: 40px; margin-right: 5px'></td><td>";
	include "create.php";
	echo "</td></tr><tr><td style = 'height: 45px'><img src = '/LyfSync/mg.png' style = 'height: 40px; margin-right: 5px'></td><td>";
	include "discover.php";
	echo "</td></tr><tr><td style = 'height: 45px'><img src = '/LyfSync/check.png' style = 'height: 40px; margin-right: 5px'></td><td>";
	include "manage.php";
	echo "</td></tr></table>";
?>