<?php
include "db_connect.php";

if(isset($_POST['register'])){

$username=$_POST['username'];
$password=$_POST['password'];

$sql="INSERT INTO users(username,password) VALUES('$username','$password')";

mysqli_query($conn,$sql);

echo "Registration Successful";

}
?>

<form method="post">

Username:
<input type="text" name="username"><br><br>

Password:
<input type="password" name="password"><br><br>

<input type="submit" name="register" value="Register">

</form>