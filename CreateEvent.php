<?php // ?>
<div align = "center" style = "width: 1055px; height: 381px; border-radius: 2px; margin-top: 11px; margin-bottom: 13px; margin-right: 10px; padding-top: 20px; padding-left: 20px; padding-right: 20px; box-shadow: 0px 0px 5px 1px #ccc">
<?php
	echo "<table style = 'width: 1000px; margin-top: 5px'>";
	echo "<tr><td align = 'center' style = 'width: 500px'>";
	echo "<td>";
	echo "<table style = 'height: 348px'><tr><td valign = 'top'>";
		include "profile_banner.php";
	echo "</td></tr><tr><td>";
		include "newsfeed.php";
	echo" </td></tr></table>";
	echo "</td>";
	echo "<td>";
	echo "<table style = 'height: 348px'><tr><td valign = 'top'>";
	include "menubar.php";
	echo "</td></tr>";
	echo "</td>";
	echo "<tr><td>";
		include "create.php";
	echo "</tr>";
	echo "</td></tr></table>";
	echo "</table>";
?>
</div>