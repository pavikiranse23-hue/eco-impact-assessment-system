<?php
include "db_connect.php";

$sql = "SELECT * FROM eco_data ORDER BY id ASC";
$result = mysqli_query($conn,$sql);

/* Data for Graph */
$departments = [];
$scores = [];

$query = mysqli_query($conn,"SELECT department,total_score FROM eco_data");

while($data = mysqli_fetch_assoc($query)){
$departments[] = $data['department'];
$scores[] = $data['total_score'];
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Department Eco Impact Report</title>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>

body{
font-family:Arial;
background:linear-gradient(135deg,#2ecc71,#3498db);
padding:40px;
}

h2{
text-align:center;
color:white;
margin-bottom:30px;
}

table{
border-collapse:collapse;
margin:auto;
width:90%;
background:white;
border-radius:10px;
overflow:hidden;
box-shadow:0 5px 15px rgba(0,0,0,0.2);
}

th{
background:#2ecc71;
color:white;
padding:12px;
}

td{
padding:10px;
text-align:center;
border-bottom:1px solid #ddd;
}

tr:hover{
background:#f2f2f2;
}

.chart-container{
width:70%;
margin:40px auto;
background:white;
padding:20px;
border-radius:10px;
box-shadow:0 5px 15px rgba(0,0,0,0.2);
}

</style>

</head>

<body>

<h2>Department Eco Impact Report</h2>

<table>

<tr>
<th>ID</th>
<th>Department</th>
<th>Elec</th>
<th>Elec Score</th>
<th>Water</th>
<th>Water Score</th>
<th>Paper</th>
<th>Paper Score</th>
<th>Waste</th>
<th>Waste Score</th>
<th>Total Score</th>
<th>Rating</th>
</tr>

<?php

while($row = mysqli_fetch_assoc($result))
{

$score = $row['total_score'];

if($score >= 80){
$color="green";
}
elseif($score >=60){
$color="orange";
}
else{
$color="red";
}

echo "<tr>";

echo "<td>".$row['id']."</td>";
echo "<td>".$row['department']."</td>";

echo "<td>".$row['electricity']."</td>";
echo "<td>".$row['electricity_score']."</td>";

echo "<td>".$row['water']."</td>";
echo "<td>".$row['water_score']."</td>";

echo "<td>".$row['paper']."</td>";
echo "<td>".$row['paper_score']."</td>";

echo "<td>".$row['waste']."</td>";
echo "<td>".$row['waste_score']."</td>";

echo "<td style='color:$color;font-weight:bold;'>".$row['total_score']."</td>";

echo "<td>".$row['rating']."</td>";

echo "</tr>";

}

?>

</table>

<div class="chart-container">
<h3 style="text-align:center;">Department Eco Score Graph</h3>
<canvas id="ecoChart"></canvas>
</div>

<div style="text-align:center;margin-top:20px;">
<a href="dashboard.php">
<button style="padding:10px 20px;background:#2ecc71;border:none;color:white;border-radius:5px;">
Back to Dashboard
</button>
</a>
</div>

<script>

const ctx = document.getElementById('ecoChart');

new Chart(ctx, {
type: 'bar',
data: {
labels: <?php echo json_encode($departments); ?>,
datasets: [{
label: 'Total Eco Score',
data: <?php echo json_encode($scores); ?>,
backgroundColor: [
'#2ecc71',
'#3498db',
'#f39c12',
'#e74c3c',
'#9b59b6',
'#1abc9c'
]
}]
},
options: {
scales: {
y: {
beginAtZero: true,
max:100
}
}
}
});

</script>

</body>
</html>