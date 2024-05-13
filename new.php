<?php
  $serverName="localhost";
  $userName="root";
  $pass="";
  $dbName="abcd";
  $conn=new mysqli($serverName,$userName,$pass,$dbName);
  $sql="SELECT * from ab ";
  $res=mysqli_query($conn,$sql);
  //print_r($res);
 
  if(isset($_POST['add']))
  {
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    if(empty($id)||empty($name)||empty($email)||empty($pass))
    {
      echo "Fill up the form first";
    }
    else{
      $sql2="insert into ab values ('$id','$name','$email','$pass')";
      $res2=mysqli_query($conn,$sql2);
      if($res2){
        echo "User added";
      }
    }
  }
  


  if(isset($_POST['delete'])){
    $del_Id=$_POST['id'];
    
   $sql_del="DELETE FROM ab WHERE Id = '$del_Id'";

      $res_del=mysqli_query($conn,$sql_del);
      if( $res_del){
        echo "User deleted ";
      }

  }
  $sql3="select * from ab";
  $res3=mysqli_query($conn,$sql3);
  $r;
?>

<!DOCTYPE html>
<html>
<body>
<form method="post">
   ID: <input type="text" name="id"><br>
   Name:<input type="text" name="name"><br>
   Email:<input type="text" name="email"><br>
   Pass:<input type="password" name="pass"><br>

<button name="add">Add</button>

</form>
<table border=1>
<tr>
<th>Id</th>
<th>Name</th>
<th>Email</th>
</tr>

<?php while($r=mysqli_fetch_assoc($res3)){ ?>
<tr>
<td><?php echo $r["Id"]?></td>
<td><?php echo $r["Name"]?></td>
<td><?php echo $r["Email"]?></td>
</tr>
<form method="post">
      
      <input type="hidden" name="id" value="<?php echo $r['Id']; ?>">
      
      <button type="submit" name="delete">Delete</button>
    </form>
<?php } ?>


</table>

</form>

</body>
</html>