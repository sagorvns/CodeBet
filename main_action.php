<?php

session_start();

include ('db.php');

/* checking for updating question */
$zeal=$_GET['zeal'];


// checking user identification


if($zeal != $_SESSION['zeal_id'])
{
	header('Location:action_page.php');
}



if(isset($_GET['skip']))
{
	$id=$_GET['skip'];
	$zeal_from=$_GET['zeal_from'];
	echo $id;
	

	$query3="UPDATE question SET status=0 WHERE id='$id'";
	$sql3=mysqli_query($con,$query3);
	//echo $new_status;

	echo $zeal_from;
	$q_id = $_GET['qd'];
	echo $q_id;

	$ques_sql = "SELECT * from betting WHERE id='$q_id'";
	$result_ques = mysqli_query($con,$ques_sql);
	if($row_ques=mysqli_fetch_array($result_ques))
	{
	$points_q=$row_ques['points'];

		echo "Error";
	
	 $queryusers= "UPDATE users set points=points+".$points_q." WHERE zeal='$zeal_from'";
	 echo $queryusers;
		if(mysqli_query($con,$queryusers))
		{ 
		 header('Location: main_action.php?zeal='.$zeal.'');
		}
}
//echo $id;
}

	
	$query="SELECT * from question WHERE zealto='$zeal'";
	$sql=mysqli_query($con,$query);

	$user_query ="SELECT points from users WHERE zeal='$zeal'";
	$user_object =  mysqli_query($con,$user_query);
	$user_points = mysqli_fetch_array($user_object);
	
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

	
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="action_page.php"><button class="btn btn-warning">&#8810;Back</button></a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" >Points : <?php echo $user_points['points']; ?></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" >Zeal ID : <?php echo $zeal;?></a>
    </li>
  

   
  </ul>
</nav>
<div class="container">
		<div class="row">
			<div  class="col-md-2" style="background-color: #f2f2f2;height: 600px;">				
			</div>

			<div  class="col-md-8">
			<?php
			$i=1;
			while($row1=mysqli_fetch_array($sql))
			{
				$ques_id=$row1['ques_id'];
				$zealfrom=$row1['zealfrom'];
				
				if($row1['status']==1)
				{

			$query="SELECT * FROM betting WHERE id='$ques_id'";
			$run=mysqli_query($con,$query);
			$row=mysqli_fetch_array($run);
			
			
			echo'
			<ul>
			<li>From  ='.$zealfrom.'</li>
			<li class="qa"> 
			<form action="answer.php" method="GET">
			<div>
			<pre>('.$i.') '.$row['question'].'</pre>
			<br>
			<input type="radio" name="ques" value="A" >
			<label>'.$row['option1'].'</label><br/>
			<input type="radio" name="ques" value="B">
			<label>'.$row['option2'].'</label><br>
			<input type="radio" name="ques" value="C">
			<label>'.$row['option3'].'</label><br>
			<input type="radio" name="ques" value="D">
			<label>'.$row['option4'].'</label>
			<input type="hidden" name="zeal" value="'.$zeal.'">
			<input type="hidden" name="ques_id" value="'.$ques_id.'">
			<input type="hidden" name="zealfrom" value="'.$zealfrom.'">
			
			</div>
			<br><br>
		
			<button  class="btn btn-success">SUBMIT FOR POINT '.$row['points'].' </button>
			

			</form>
			
<a href="main_action.php?skip='.$row1['id'].'&zeal='.$zeal.'&zeal_from='.$zealfrom.'&qd='.$row['id'].'"><button style="float:right;margin-top:-40px;" class="btn btn-success">Want to skip this!</button></a>

					</li>
				</ul>
				';

				$i++;	
			}
	}													
			
			
?>
				
			</div>

			<div  class="col-md-2" style="background-color: #f2f2f2;height: 600px;">
				<h4 align="center">Online Users</h4>
				<div id="friends" align="center">
					
				</div>

			</div>
			
		</div>
		
	</div>

</body>
</html>

<script type="text/javascript">
	function refresh_box() 
{
    $("#friends").load('list.php');
    setTimeout(refresh_box, 1000);
}

$(document).ready(function(){
   refresh_box();
});

</script>
