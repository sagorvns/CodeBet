<?php 
include('db.php');

$question = $_POST['question'];
$option1 = $_POST['option1'];
$option2 = $_POST['option2'];
$option3 = $_POST['option3'];
$option4 = $_POST['option4'];
$points = $_POST['points'];
$ans = $_POST['ans'];



$query = "INSERT INTO betting(id,question,option1,option2,option3,option4,points,answer) VALUES ('','$question','$option1','$option2','$option3','$option4','$points','$ans')";


		$result=mysqli_query($con, $query);
		if($result)
		{
			header('location:question_form.php');
		}
		else
		{
		}
		


?>