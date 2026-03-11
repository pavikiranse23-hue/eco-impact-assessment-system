<?php
session_start();
include "db_connect.php";

if(isset($_POST['login'])){

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){

$_SESSION['username'] = $username;

header("Location: dashboard.php");
exit();

}
else{
$error="Invalid Login";
}

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>

<style>

body{
font-family:Arial;
background:linear-gradient(135deg,#2ecc71,#3498db);
height:100vh;
display:flex;
justify-content:center;
align-items:center;
}

.container{
background:rgba(255,255,255,0.2);
padding:40px;
border-radius:20px;
width:350px;
text-align:center;
box-shadow:0 5px 20px rgba(0,0,0,0.2);
}

h2{
color:white;
margin-bottom:20px;
}

input{
width:90%;
padding:10px;
margin:10px 0;
border:none;
border-radius:8px;
}

button{
width:95%;
padding:12px;
background:#2ecc71;
border:none;
border-radius:10px;
color:white;
font-size:16px;
cursor:pointer;
}

button:hover{
background:#27ae60;
}

.error{
color:red;
margin-bottom:10px;
}

</style>

</head>

<body>

<div class="container">

<h2>Login</h2>

<?php
if(isset($error)){
echo "<p class='error'>$error</p>";
}
?>

<form method="POST">

<input type="text" name="username" placeholder="Username" required>

<input type="password" name="password" placeholder="Password" required>

<button type="submit" name="login">Login</button>

</form>

</div>

</body>
</html>