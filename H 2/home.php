<?php
session_start();
if(empty($_SESSION['id'])){
	header("location:h_sec.php");
}
else if(isset($_GET['out'])){
	session_destroy();
	header("location:h_sec.php");
}
?>
<!DOCTYPE html>
<html>
<head>

	<title></title>
</head>
<body>
	<h1>Home Page</h1>
    Welcome,<?php echo $_SESSION['id']; ?>
    <form>
    	  <button name="out">LogOut</button>
    </form>
  
</body>
</html>