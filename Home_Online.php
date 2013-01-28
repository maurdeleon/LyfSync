<?php // Home: User successfully logs in. ?>
<?php
session_start();
$_SESSION['username'] = $_POST['User'];
$_SESSION['password'] = $_POST['Pass'];
$_SESSION['authuser'] = 0;

//Check username and password information.
//Username max length: 16 characters.
if (($_SESSION['username'] == 'maur') and ($_SESSION['password'] == '12345'))
	{
		$_SESSION['authuser'] = 1;
	}
else 
	{
		// Links to homepage with Log In TRY AGAIN.
		include "Home_LogInFailed.php";
		exit();
	}	
?>

<html>
<head>
<title> <?php /* Passing a value through a URL. */ echo $_SESSION['username']; ?> </title>
</head>
<body>
<center>
<?php
	include "Header_Online.php"; // Welcoming Header (User successfully logs in).
	echo "<table><td>";
	include "TakeATour.php";
	echo "</td><td>";
	include "EventsList.php";
	echo "</td></table>";
	include "Footer.php";
?>
</center>
</body>
</html>

