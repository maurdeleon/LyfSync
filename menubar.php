<?php // Create An Event, Discover Events and Manage Your Events links TABLE - lowerleft-hand side of center container (Profile).
	echo "<table valign = 'middle' style = 'width: 620px; border-radius: 2px; box-shadow: 0px 0px 4px 0px #86B404'>";
	
	echo "<td style = 'border-right: solid 1px #E6E6E6'>";
	echo "<a href = 'ProfilePage.php'>";
	echo "<div align = 'center' style = 'width: 145px; background-color: #FFFFFF'>";
	echo "<table><td><img src = '/LyfSync/calendar.png' style = 'height: 20px; margin-right: 1px'></td><td><font face = 'Calibri' size = '2'> Calendar	 </font></td></table>";
	echo "</div>";
	echo "</a>";
	echo "</td>";
	
	echo "<td style = 'border-right: solid 1px #E6E6E6'>";
	echo "<a href = 'Profile_CreateEvent.php'>";
	echo "<div align = 'center' style = 'width: 145px; background-color: #FFFFFF'>";
	echo "<table><td><img src = '/LyfSync/plus.png' style = 'height: 20px; margin-right: 1px'></td><td><font face = 'Calibri' size = '2'> Create An Event </font></td></table>";
	echo "</div>";
	echo "</a>";
	echo "</td>";
	
	echo "<td valign = 'top' style = 'border-right: solid 1px #E6E6E6'>";
	echo "<a href = 'Profile_DiscoverEvents.php'>";
	echo "<div align = 'center' style = 'width: 145px; background-color: #FFFFFF'>";
	echo "<table><td><img src = '/LyfSync/mg.png' style = 'height: 20px; margin-right: 1px'></td><td><font face = 'Calibri' size = '2'> Discover Events </font></td></table>";
	echo "</div>";
	echo "</a>";
	echo "</td>";
	
	echo "<td>";
	echo "<a href = 'Profile_ManageYourEvents.php'>";
	echo "<div align = 'center' style = 'width: 145px; background-color: #FFFFFF'>";
	echo "<table><td><img src = '/LyfSync/check.png' style = 'height: 20px; margin-right: 1px'></td><td><font face = 'Calibri' size = '2'> Manage Your Events </font></td></table>";
	echo "</div>";
	echo "</a>";
	echo "</td>";
	
	echo "</table>";
?>