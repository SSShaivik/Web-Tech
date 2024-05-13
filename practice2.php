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
    else
    { 
        $sql2="insert into ab values ('$id','$name','$email','$pass')"; 
        $res2=mysqli_query($conn,$sql2); 
        if($res2)
        { 
            echo "User added"; 
        } 
    } 
} 
$sql3="select * from ab"; 
$res3=mysqli_query($conn,$sql3); 

//if(isset($_POST['delete'])) 
{ 
    $id=$_POST['id']; 
    $name=$_POST['name']; 
    $email=$_POST['email']; 
    $pass=$_POST['pass']; 
    if(empty($id)||empty($name)||empty($email)||empty($pass)) 
    { 
        echo "Fill up the form first"; 
    } 
    else
    { 
        $sql4="delete from ab  ('$id','$name','$email','$pass')"; 
        $res4=mysqli_query($conn,$sql4); 
        if($res4)
        { 
            echo "User deleted"; 
        } 
    } 
}// 
?> 
<!DOCTYPE html> 
<html> 
<body> 
<form method="post"> 
    ID: <input type="text" name="id"><br> 
    Name:<input type="text" name="name"><br> 
    Email:<input type="text" name="email"><br> 
    Pass:<input type="password" name="pass"><br> 
    <button name="add">Add</button><br>
    <button name="delete">Delete</button> 
</form> 
<table border=1> 
    <tr> 
        <th>Id</th> 
        <th>Name</th> 
        <th>Email</th> 
    </tr> 
    <?php 
    while($r=mysqli_fetch_assoc($res3))
    { 
        ?> 
        <tr> 
            <td><?php echo $r["Id"]?></td> 
            <td><?php echo $r["Name"]?></td> 
            <td><?php echo $r["Email"]?></td> 
        </tr> <?php } ?> 
    </table> 
</body> 
</html>