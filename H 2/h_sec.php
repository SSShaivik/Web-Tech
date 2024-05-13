<?php 
session_start();
if(!empty($_SESSION['id'])){
	header("location:home.php");
}
  $serverName="localhost";
  $userName="root";
  $pass="";
  $dbName="abcd";
  $conn=new mysqli($serverName,$userName,$pass,$dbName);
if(isset($_POST['log']))
{
	$id=$_POST['id'];
	$pass=$_POST['pass'];

  if(empty($id)||empty($pass))
  {
  	echo "Fill up the form first";
  }
  else{
  	$sql="SELECT * from ab where id='$id' and pass='$pass'";
  	$res=mysqli_query($conn,$sql);
  	if($res->num_rows>0)
  	{
  		$_SESSION['id']=$id;
  		header("location:home.php");
  	}
  	else
  	{
  		echo " Enter corret Id & Pass";
  	}

  }

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

<form method="post">
   ID: <input type="text" name="id"><br>
   Pass:<input type="password" name="pass"><br>
	<button name="log">Login</button>
</form>

</body>
</html>