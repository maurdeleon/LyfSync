<?php //Profile Banner - upperleft-hand side of center container (Profile). ?>
<div>
<?php
	echo "<table align = 'left' style = 'width: 500px; height: 120px; background-color: #D0F5A9; border-radius: 2px'><td align = 'middle' style = 'width: 120px'><img src = /LyfSync/DP.jpg style = 'height: 100px'></td>";
	echo "<td align = 'left' valign = 'top' style = 'padding-top: 6px'><div style = 'height: 70px'><font face = 'Calibri' size = '5' color = '#1C1C1C'><b>";
	echo $_SESSION['username'];
	echo "</b></font><br>";
	echo "<font face = 'Calibri' size = '2' color = '#333333'>Yr 3 BS ITE <br> ADMU Class of 2014</font></div>";
	echo "<div align = 'center' valign = 'middle' style = 'width: 280px; height: 21px; background-color: white; border: solid 1px #ccc; border-radius: 4px; margin-top: 8px; padding-top:1px'><font face = 'Calibri' size = '3' color = '#333333'>In Sync With</font></div></td>";
	echo "<td valign = 'top'><div align = 'right' valign = 'top' style = 'height: 20px; margin-top: 10px; padding-right: 13px'><font face = 'Calibri' size = '2' color = '#63BA33'><u>Edit Profile</u></font></div></td></table>";
?>
</div>