<?php

session_start();

$zeal = $_SESSION['zeal_id'];

include('db.php');

$query = "SELECT * from users WHERE zeal='$zeal' ";

$result = mysqli_query($con,$query);

$row = mysqli_fetch_array($result);


echo $row['points'];




?>