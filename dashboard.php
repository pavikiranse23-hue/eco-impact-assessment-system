<?php
session_start();

if(!isset($_SESSION['username'])){
header("Location: index.php");
exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Eco Dashboard</title>

<style>

body{
font-family:Arial;
background:linear-gradient(135deg,#2ecc71,#3498db);
height:100vh;
display:flex;
justify-content:center;
align-items:center;
}

.box{
background:rgba(255,255,255,0.2);
padding:40px;
border-radius:20px;
text-align:center;
width:300px;
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

.green{background:#2ecc71;color:white;}
.orange{background:#f39c12;color:white;}
.red{background:#e74c3c;color:white;}

</style>

</head>

<body>

<div class="box">

<h1>Eco Dashboard</h1>

<p style="color:white;">Welcome <?php echo $_SESSION['username']; ?></p>

<a href="project_form.php">
<button class="green">Enter Eco Data</button>
</a>

<a href="report.php">
<button class="orange">View Report</button>
</a>

<a href="logout.php">
<button class="red">Logout</button>
</a>

</div>

</body>
</html>