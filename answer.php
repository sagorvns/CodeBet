<?php

include('db.php');

$answer=$_GET['ques'];
$zeal=$_GET['zeal'];
$zealfrom=$_GET['zealfrom'];
$ques_id=$_GET['ques_id'];


$query="SELECT * from betting WHERE id='$ques_id'";
$sql=mysqli_query($con,$query);

$row=mysqli_fetch_array($sql);

$correct = $row['answer'];
$points = $row['points'];

$user1="SELECT * from users WHERE zeal='$zeal'";
$user1_sql=mysqli_query($con,$user1);
$user1_row=mysqli_fetch_array($user1_sql);

$points_zeal1 = $user1_row['points'];

$user2="SELECT * from users WHERE zeal='$zealfrom'";
$user2_sql=mysqli_query($con,$user2);
$user2_row=mysqli_fetch_array($user2_sql);

$points_zeal2 = $user2_row['points'];


if($correct == $answer)
{
	$newpoints1= $points_zeal1 + $points;

	//$newpoints2= $points_zeal2 - $points;

	$query1 = "UPDATE users SET points ='$newpoints1' WHERE zeal='$zeal'";
	//$query2 = "UPDATE users SET points ='$newpoints2' WHERE zeal='$zealfrom'";
	$ques_query = "UPDATE question SET status =0 WHERE zealfrom='$zealfrom' AND zealto='$zeal' AND ques_id='$ques_id'";
	mysqli_query($con,$ques_query);
	mysqli_query($con,$query1);
	//mysqli_query($con,$query2);
}
else
{
	$newpoints1= $points_zeal1 - $points;

	echo $newpoints1;

	$newpoints2= $points_zeal2 + (2*$points);

	echo $newpoints2;

	$query1 = "UPDATE users SET points ='$newpoints1' WHERE zeal='$zeal'";
	$query2 = "UPDATE users SET points ='$newpoints2' WHERE zeal='$zealfrom'";
	$ques_query = "UPDATE question SET status =0 WHERE zealfrom='$zealfrom' AND zealto='$zeal' AND ques_id='$ques_id'";
	
	mysqli_query($con,$query1);
	mysqli_query($con,$query2);
	mysqli_query($con,$ques_query);
}

header("location:main_action.php?zeal=$zeal");
?>		