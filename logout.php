<?php
//logout.php
 session_start();
 session_unset();
 session_destroy();

include('db.php');

$zeal=$_GET['zeal'];

echo $zeal;

$sql = "UPDATE users SET status=0 WHERE zeal='$zeal'";
	if(mysqli_query($con,$sql))
	{
		header('location:index.php');
	}

?>
