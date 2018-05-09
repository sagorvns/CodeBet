<?php

include('db.php');


$query = "SELECT * from users order by points desc";
$sql=mysqli_query($con,$query);


	

?>
<!DOCTYPE html>
<html>
<head>
	<title>CodeBet</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<h3>User List</h3>
  <a href="logall.php" style="float: right;position: relative;"><button class="btn-danger btn">Logout Everyone</button></a>
  <br><br>
	<table class="table table-striped">
    <thead>
      <tr>
        <th>Status</th>
        <th>Name</th>
        <th>Zeal ID</th>
        <th>Points</th>
      </tr>
    </thead>
        <tbody>
      <tr>
      	<?php while($row=mysqli_fetch_array($sql))
	{ ?>

        <td><?php if($row['status']){ echo "<button class='btn btn-success' disabled>Online</button>";} else{echo "<button class='btn btn-danger' disabled>Offline</button>";} ?></td>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['zeal']; ?></td>
        <td><?php echo $row['points'];  ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>


</div>
</body>
</html>