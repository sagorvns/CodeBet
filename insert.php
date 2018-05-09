<?php

session_start();

include('db.php');

$zeal=$_POST['zeal'];

$_SESSION['zeal_id']=$zeal;

$name=$_POST['name'];
$branch=$_POST['branch'];
$status=True;
$points=250;
		$query = "INSERT INTO users(zeal,name,branch,points,status) VALUES ('$zeal','$name','$branch','$points','$status')";

		if(mysqli_query($con, $query))
		{
			header('location:action_page.php');
		}




?>