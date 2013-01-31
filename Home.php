<?php /* Default Homepage */ 
error_reporting (E_ALL ^ E_NOTICE);
session_start();
?>
<html>
<head>
<title>LyfSync - Discover Events that you love!</title>
<script src="_js/homeJS.js">
</script>
</head>
<body>
<center>
<?php include "Header.php"; ?>
<table>
	<td>
<?php include "TakeATour.php"; ?>
	</td>
    <td>
<?php include "EventsList.php"; ?>
	</td>
</table>
<?php include "Footer.php"; ?>
</center>
</body>
</html>