<?php // Successful Log In - WELCOME: right-hand side of Header. ?>
<div align = "left" style = "width: 380px; height: 85px; background-color: #FFFFFF; border: solid 1px #FFFFFF; border-radius: 5px; box-shadow: 0px 0px 4px 0px #86B404; padding-top: 2px">

<?php
	echo "<table style = 'margin-left: 7px; padding-top: 1px; width: 380px'><td><font face = 'Calibri' size = '2'>Welcome, </font></td></table>";
	echo "<table style = 'border-top:solid 1px #E6E6E6; padding-left: 10px; padding-right: 10px; margin-left: 10px; width: 360px'><td><img src = /LyfSync/DP.jpg style = 'height: 52px'></td>";
	echo "<td style = 'padding-left: 12px'><font face = 'Calibri' size = '4px'><b>";
	echo $_SESSION['username'];
	echo "</b></font></td><td style = 'border-left:solid 1px #E6E6E6; padding-left: 13px; width: 30px'><button style = 'width: 60px; height: 25px; background-color: white; border: solid 1px #ccc; border-radius: 4px; type='submit' value='LogOut'><font face = 'Calibri' size = '2'> Log Out </font></button></td></table>";
?>
</div>