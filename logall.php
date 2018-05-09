<?php


include('db.php');

$query =" UPDATE users set status=0";
mysqli_query($con,$query);

header('location:admin.php');


?>