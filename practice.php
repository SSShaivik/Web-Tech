<?php 
  $serverName="localhost";
  $userName="root";
  $pass="";
  $dbName="abcd";
  $conn=new mysqli($serverName,$userName,$pass,$dbName);
  $sql="SELECT * from ab";
  $res=mysqli_query($conn,$sql);
 //print_r($res);
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<form>
<table border="1">
<tr>
<th>Id</th>
<th>Name</th>
<th colspan="2">option</th>
</tr>
<?php while ($r=mysqli_fetch_assoc($res)) { ?>
<tr>
<td><?php echo $r["Id"]; ?></td>
<td><?php echo $r["Name"]; ?></td>
<td><button name="edit" value="<?php echo $r["Id"]; ?>">Edit</button></td>
<td><button name="delete" value="<?php echo $r["Id"]; ?>">Delete</button></td>
</tr>
<?php } ?>
</table>
</form>
</body>
</html>
<?php
if(isset($_GET['edit']))
{
  echo $_GET["edit"];
}
 
?>