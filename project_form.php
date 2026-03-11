<!DOCTYPE html>
<html>
<head>
<title>Enter Eco Data</title>

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

.back{
margin-top:10px;
display:block;
color:white;
text-decoration:none;
}

</style>

</head>

<body>

<div class="container">

<h2>Enter Eco Data</h2>

<form method="POST" action="eco_calculator.php">

<input type="text" name="department" placeholder="Department" required>

<input type="number" name="electricity" placeholder="Electricity Usage" required>

<input type="number" name="water" placeholder="Water Usage" required>

<input type="number" name="paper" placeholder="Paper Usage" required>

<input type="number" name="waste" placeholder="Waste Generated" required>

<button type="submit">Save Data</button>

</form>

<a class="back" href="dashboard.php">← Back to Dashboard</a>

</div>

</body>
</html>