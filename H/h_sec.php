<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1 align="center">Login</h1>

<form method="get">
ID:<input type="text" name="id"><br>
Pass: <input type="password" name="pass"><br>
<button>Login</button>
</form>
<?php
if(empty($_GET['id'])||empty($_GET['pass'])) 
{
	echo "Empty";
}
else
{
	header("location: home.php");
}
?>
</body>
</html>