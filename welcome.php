<?php // Successful Log In - WELCOME: right-hand side of Header. ?>
<div align = "left" style = "width: 380px; height: 86px; background-color: #FFFFFF; border: solid 1px #FFFFFF; border-radius: 5px; box-shadow: 0px 0px 4px 0px #86B404; padding-top: 1px">

<?php
	echo "<table align = 'center' valign = 'middle' style = 'margin-left: 7px; width: 375px'><td style = 'padding-left: 2px'><font face = 'Calibri' size = '2' color = 'black'>WELCOME, </font></td>";
	echo "<td style = 'width: 65px'><a href = 'home.php'><button valign = 'top' style = 'width: 60px; height: 19px; background-color: white; border: solid 1px #ccc; border-radius: 4px' type='submit' value='LogOut'><font face = 'Calibri' size = '2'>Log Out</font></button></a></a></td></table>";
	echo "<table style = 'border-top:solid 1px #E6E6E6; margin-left: 7px; width: 360px'><td><img src = /LyfSync/DP.jpg style = 'height: 52px'></td>";
	echo "<td><a href = 'ProfilePage.php'><button style = 'width: 270px; height: 52px; background-color: #D0F5A9; border: solid 1px #D0F5A9; border-radius: 2px'><font face = 'Calibri' size = '4px'>";
	echo $_SESSION['username'];
	echo "</font></td>";
	echo "<td style = 'width: 40px'><a href = 'Profile_Settings.php'><img src = '/LyfSync/Settings.png' style = 'height: 32px'></td></table>";
?>
</div>