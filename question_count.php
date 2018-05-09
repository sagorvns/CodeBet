<?php

include('db.php');

session_start();

$zeal=$_SESSION['zeal_id'];

$sql = "SELECT COUNT(*) from question WHERE zealto='$zeal' AND status=1";

$result = mysqli_query($con,$sql);

$row=mysqli_fetch_array($result);

echo "<p>".$row[0]."</p>";





?>