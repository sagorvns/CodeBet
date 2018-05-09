<?php 
session_start();

include('db.php');

$zealfrom = $_SESSION['zeal_id'];
$ques_id = $_GET["id"];


?>

<!DOCTYPE html>
<html>
<head>
	<title>CodeBet</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>
<body>
	<br>
<h3 style="float: left;">Send to :</h3>
	<div class="container">
			<div  style="background-color: #f2f2f2;height: 100%">
				<h4 align="center">Online Users</h4><!-- 
				<form action="send.php" action="GET"> -->

					<input type="hidden" name="zealfrom" value="<?php echo $zealfrom;?>">
					<input type="hidden" name="ques_id" value="<?php echo $ques_id;?>">
				<div id="friends" align="center">
					<?php

					$query="SELECT * from users WHERE points>0 ";
						
					$sql=mysqli_query($con,$query);


					while($row=mysqli_fetch_array($sql))
	{

		
		$query_ques="SELECT points from betting WHERE id =".$ques_id;
		$result_ques=mysqli_query($con,$query_ques);	
		$row_ques=mysqli_fetch_array($result_ques);
		
		// $query_expec="SELECT * from users WHERE zeal='$zealfrom'";
		// $sql_expec=mysqli_query($con,$query);
		// $row_expec=mysqli_fetch_array($sql_expec);



		$ques_points = $row_ques['points'];	
		if($row['points']<$ques_points)
		{
			//header('location:action_page.php?zeal='.$zealfrom);
			
		}




		if($row['status'] == True)
		{
						echo "<a href=send.php?zealto=".$row['zeal']."&zealfrom=".$zealfrom."&ques_id=".$ques_id."><button class='btn btn-success' style='width:100px;margin-top:5px;margin-bottom:10px;'>".$row['zeal']."</button><br>";
						// echo "<input type='hidden' name='zealto' value=".$row['zeal'].">";
					}
				}

					

					?>
					
				</div>
			<!-- 			<button type="submit" class='btn btn-success'>Submit</button>
				</form> -->

			</div>
	</div>
</body>
</html>

<!-- <script type="text/javascript">
	function refresh_box() 
{
    $("#friends").load('list2.php');
    setTimeout(refresh_box, 3000);
}

$(document).ready(function(){
   refresh_box();
});
</script> -->