<?php 
include('db.php');


$zealfrom=$_GET['zealfrom'];
$zealto=$_GET['zealto'];
$ques_id=$_GET['ques_id'];
$status = True;

$query = "INSERT INTO question(zealfrom,zealto,ques_id,status) VALUES ('$zealfrom','$zealto','$ques_id','$status')";

		if(mysqli_query($con, $query))
		{
			$zeal=$zealfrom;
		

$sql= "SELECT * from betting where id='$ques_id'";
$result = mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);

$points=$row['points'];
echo "Points".$points;

$query_users = "SELECT * from users where zeal='$zealfrom'";
$result_user = mysqli_query($con,$query_users);
$row_user = mysqli_fetch_array($result_user);

$old_points= $row_user['points'];
echo "Old Points".$old_points;
$newpoints = $old_points-$points;
echo " new Points".$newpoints;

$new_query = "UPDATE users SET points ='$newpoints' WHERE zeal='$zealfrom'";
mysqli_query($con,$new_query);

header('location:action_page.php');
}



 ?>