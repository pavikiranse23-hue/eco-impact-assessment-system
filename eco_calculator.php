<?php

include "db_connect.php";

$department = $_POST['department'];
$electricity = $_POST['electricity'];
$water = $_POST['water'];
$paper = $_POST['paper'];
$waste = $_POST['waste'];

/* Eco Score Calculation */

$elec_score = 100 - ($electricity * 0.1);
$water_score = 100 - ($water * 0.1);
$paper_score = 100 - ($paper * 0.1);
$waste_score = 100 - ($waste * 0.1);

$total_score = ($elec_score + $water_score + $paper_score + $waste_score) / 4;
/* Rating */

if($total_score >= 80){
$rating="Excellent";
}
elseif($total_score >=60){
$rating="Good";
}
else{
$rating="Poor";
}

/* Insert Data */

$sql="INSERT INTO eco_data
(department,electricity,electricity_score,water,water_score,paper,paper_score,waste,waste_score,total_score,rating)
VALUES
('$department','$electricity','$elec_score','$water','$water_score','$paper','$paper_score','$waste','$waste_score','$total_score','$rating')";
mysqli_query($conn,$sql);

/* Redirect to report */

header("Location: report.php");
exit();

?>