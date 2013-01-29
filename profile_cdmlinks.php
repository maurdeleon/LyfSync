<?php // Create An Event, Discover Events and Manage Your Events links TABLE - lowerleft-hand side of center container (Profile).
	echo "<table><tr><td style = 'height: 45px'><a href = 'Profile_CreateEvent.php'><img src = '/LyfSync/plus.png' style = 'height: 40px; margin-right: 5px'></a></td><td>";
	include "create.php";
	echo "</td></tr><tr><td style = 'height: 45px'><a href = 'Profile_DiscoverEvents.php'><img src = '/LyfSync/mg.png' style = 'height: 40px; margin-right: 5px'></td><td>";
	include "discover.php";
	echo "</td></tr><tr><td style = 'height: 45px'><a href = 'Profile_ManageYourEvents.php'><img src = '/LyfSync/check.png' style = 'height: 40px; margin-right: 5px'></td><td>";
	include "manage.php";
	echo "</td></tr></table>";
?>