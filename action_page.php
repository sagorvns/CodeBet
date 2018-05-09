<?php
session_start();

include ('db.php');

	$zeal=$_SESSION['zeal_id'];

	$query="SELECT * from users where zeal='$zeal'";
	$sql=mysqli_query($con,$query);
	$row=mysqli_fetch_array($sql);
	$_SESSION['zeal_id'] =$zeal;



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

<style type="text/css">
	.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: -10px 20px;
    float:right;
}
.button5 {border-radius: 50%;}

</style>>
</head>
<body>

		<nav class="navbar navbar-expand-sm bg-dark navbar-dark  fixed-top">

  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">CodeBet</a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" >Points : <button id="points" class="btn btn-info btn-sm"></button></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" >Zeal ID : <?php echo $row['zeal'];?></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" >Name : <?php echo $row['name']; ?></a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="main_action.php?zeal=<?php echo $row['zeal'];?>"><button class="btn btn-info" style="position: absolute;"> Questions Left: </button>&nbsp;<button class="btn btn-primary" id="q_count" style="position: absolute;float: right; height: 30px;margin-left: 130px; height:38px;"></button></a>
    </li>
  

    <li class="nav-item" style="margin-left: 500px;">
      <a class="nav-link" href="logout.php?zeal=<?php echo $zeal;?>" ><button class="btn btn-danger"> Logout </button></a>
    </li>
  </ul>
</nav>top
<span id="" ></span>
<br><br><br>

	<div class="container">
		<div class="row">
			<div  class="col-md-2" style="background-color: #f2f2f2;">	
				<h3>Questions</h3>
				<hr>

				<h4>Point: 10</h4>
				<button  type="button" class="btn btn-warning">01</button>
				<a href="#2"><button type="button" class="btn btn-warning">02</button></a>
				<a href="#3"><button type="button" class="btn btn-warning">03</button></a>
				<a href="#4"><button type="button" class="btn btn-warning" style="margin-top: 10px;">04</button></a>
				
				<a href="#5"><button type="button" class="btn btn-warning" style="margin-top: 10px;">05</button></a>
				<a href="#6"><button type="button" class="btn btn-warning" style="margin-top: 10px;">06</button></a>
				<a href="#7"><button type="button" class="btn btn-warning" style="margin-top: 10px;">07</button></a>
				<a href="#8"><button type="button" class="btn btn-warning" style="margin-top: 10px;">08</button></a>

				<a href="#9"><button type="button" class="btn btn-warning" style="margin-top: 10px;">09</button></a>
				<a href="#10"><button type="button" class="btn btn-warning" style="margin-top: 10px;">10</button></a>
				<a href="#11"><button type="button" class="btn btn-warning" style="margin-top: 10px;">11</button></a>
				<a href="#12"><button type="button" class="btn btn-warning" style="margin-top: 10px;">12</button></a>

				<a href="#13"><button type="button" class="btn btn-warning" style="margin-top: 10px;">13</button></a>
				<a href="#14"><button type="button" class="btn btn-warning" style="margin-top: 10px;">14</button></a>
				<a href="#15"><button type="button" class="btn btn-warning" style="margin-top: 10px;">15</button></a>
				<hr>

				<h4>Point: 20</h4>
				<a href="#16"><button type="button" class="btn btn-warning">16</button></a>
				<a href="#17"><button type="button" class="btn btn-warning">17</button></a>
				<a href="#18"><button type="button" class="btn btn-warning">18</button></a>
			<a href="#19"><button type="button" class="btn btn-warning" style="margin-top: 10px;">19</button></a>
				
			<a href="#20"><button type="button" class="btn btn-warning" style="margin-top: 10px;">20</button></a>
			<a href="#21"><button type="button" class="btn btn-warning" style="margin-top: 10px;">21</button></a>
			<a href="#22"><button type="button" class="btn btn-warning" style="margin-top: 10px;">22</button></a>
			<a href="#23"><button type="button" class="btn btn-warning" style="margin-top: 10px;">23</button></a>

			<a href="#24"><button type="button" class="btn btn-warning" style="margin-top: 10px;">24</button></a>
			<a href="#25"><button type="button" class="btn btn-warning" style="margin-top: 10px;">25</button></a>
			<a href="#26"><button type="button" class="btn btn-warning" style="margin-top: 10px;">26</button></a>
			<a href="#27"><button type="button" class="btn btn-warning" style="margin-top: 10px;">27</button></a>

				<a href="#28"><button type="button" class="btn btn-warning" style="margin-top: 10px;">28</button></a>
				<a href="#29"><button type="button" class="btn btn-warning" style="margin-top: 10px;">29</button></a>
				<a href="#30"><button type="button" class="btn btn-warning" style="margin-top: 10px;">30</button></a>
				<hr>

				<h4>Point: 30</h4>
				<a href="#31"><button type="button" class="btn btn-warning">31</button></a>
				<a href="#32"><button type="button" class="btn btn-warning">32</button></a>
				<a href="#33"><button type="button" class="btn btn-warning">33</button></a>
				<a href="#34"><button type="button" class="btn btn-warning" style="margin-top: 10px;">34</button></a>
				
				<a href="#35"><button type="button" class="btn btn-warning" style="margin-top: 10px;">35</button></a>
				<a href="#36"><button type="button" class="btn btn-warning" style="margin-top: 10px;">36</button></a>
				<a href="#37"><button type="button" class="btn btn-warning" style="margin-top: 10px;">37</button></a>
				<a href="#38"><button type="button" class="btn btn-warning" style="margin-top: 10px;">38</button></a>
				<a href="#39"><button type="button" class="btn btn-warning" style="margin-top: 10px;">39</button></a>
				<a href="#40"><button type="button" class="btn btn-warning" style="margin-top: 10px;">40</button></a>

				<hr>

			</div>

			<div  class="col-md-8">
			<?php
			$query="SELECT * from betting";
			$run=mysqli_query($con,$query);
			$i=1;
			$y=1;

			while($row=mysqli_fetch_array($run))
			{

			echo'
			<ul>
			
			<li class="qa"> 
			<label id="'.$y.'"></label>
			<div>
			<b><pre>('.$i.') '.$row['question'].'</pre></b>
			<br>

			<label>A) '.$row['option1'].'</label><br/>
			<label>B) '.$row['option2'].'</label><br>
			<label>C) '.$row['option3'].'</label><br>
			<label>D) '.$row['option4'].'</label>
			</div>
			<br><br>
		

		<a href="quest.php?id='.$row['id'].'" target="_self"><button class="btn btn-success">Buy-Point: '.$row['points'].' </button></a>

		<a href="#top"><button class="button button5">Top</button></a>
						
					</li>
				</ul>
				';

				$i++;
				$y++;	
	}			

?>
				
			</div>

			<div  class="col-md-2" style="background-color: #f2f2f2;">
				<h4 align="center">Online Users</h4><hr>
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

<script type="text/javascript">
	function refresh_box2() 
{
    $("#q_count").load('question_count.php');
    setTimeout(refresh_box2, 1000);
}

$(document).ready(function(){
   refresh_box2();
});
</script>

<script type="text/javascript">
	function refresh_box3() 
{
    $("#points").load('points.php');
    setTimeout(refresh_box3, 1000);
}

$(document).ready(function(){
   refresh_box3();
});
</script>

