<!DOCTYPE html>
<html>
<head>
<title>Eco Impact Assessment System</title>

<style>

body{
font-family: Arial;
background: linear-gradient(135deg,#2ecc71,#3498db);
height:100vh;
display:flex;
justify-content:center;
align-items:center;
}

.container{
background:rgba(255,255,255,0.2);
padding:40px;
border-radius:20px;
text-align:center;
box-shadow:0 10px 25px rgba(0,0,0,0.2);
}

h1{
color:white;
margin-bottom:30px;
}

a{
text-decoration:none;
}

button{
width:200px;
padding:12px;
margin:10px;
border:none;
border-radius:10px;
font-size:16px;
cursor:pointer;
}

.login{
background:#2ecc71;
color:white;
}

.register{
background:#f39c12;
color:white;
}

button:hover{
opacity:0.9;
}

</style>

</head>

<body>

<div class="container">

<h1>Academic Eco Impact Assessment System</h1>

<a href="login.php">
<button class="login">Login</button>
</a>

<br>

<a href="register.php">
<button class="register">Register</button>
</a>

</div>

</body>
</html>