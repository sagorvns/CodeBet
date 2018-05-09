<?php 

	include ('db.php');

	$query="SELECT * from users";
	
	$sql=mysqli_query($con,$query);

	while($row=mysqli_fetch_array($sql))
	{
		if($row['status'] == True)
		{
			echo "<input type='radio' name='zealto' value=".$row['zeal']."><button type='submit' id='friends' class='btn btn-primary' style='margin-top:5px;width:100px;'  >".$row['name']."</button></a><br>";
		}
	}

 ?>