<?php
	session_start();
	if(empty($_SESSION['id']))
	{
		header("location:login.php");
	}
	else if(isset($_GET['out']))
	{
		session_destroy();
		header("location:login.php");
	}
?>
<!DOCTYPE html>
<head>
	<title>Login</title>
</head>
<body>
	Welcome, <?php $_SESSION['Id']; ?>
<form>
	<button name="out">LogOut</button>
</form >
	<table border>
</body>
</html>