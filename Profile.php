<?php ?>
<div style = "width: 1055px; height: 383px; border-radius: 2px; margin-top: 13px; margin-right: 10px; padding-top: 20px; padding-left: 20px; padding-right: 20px; box-shadow: 0px 0px 5px 1px #ccc">
<?php
	echo "<table style = 'width: 1000px; margin-top: 15px'><tr><td align = 'center' style = 'width: 500px'>";
	include "profile_banner.php";
	echo "</td>";
	echo "<td></td><tr>";
	echo "<tr><td align = 'center' valign = 'middle' style = 'height: 200px; border-left: solid 1px #D0F5A9; border-right: solid 1px #D0F5A9; border-bottom: solid 1px #D0F5A9'>";
	include "profile_cdmlinks.php";
	echo "</td><td>";
	include "profile_myevents.php";
	echo "</td></tr>";
	echo "</table>";
?>
</div>