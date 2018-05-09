<!DOCTYPE html>
<html>
<head>
	<title>Code Bet</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<style type="text/css">
  body{
   /* background:url('images/bg.png');*/
    background-repeat: no-repeat;
    background-size: cover;
    background-position: top;
    background-size: 1200px 1000px;

  }
</style>
</head>
<body>
  <header>
  <img style="width: 1366px;" class="img-responsive" src="images/header.jpg">
</header>
    
   <br>
<div class="container">
<div class="row">
   <div class="col-md-6">
        <h1>CODE BET</h1><h3><div style="background-color: #f2f2f2;">Hosted by Optimist Society</div></h3>
    </div>

    <div class="col-md-6">
          <img  src="images/optimist-logo.jpg" style="width: 120px;height: 120px;float:right;">
        </div>
      </div>

	
	
	<form action="insert.php" method="POST">
  <div class="form-group">
    <label for="email">Full Name</label>
    <input type="text" class="form-control" id="name" name="name" required>
  </div>
  <div class="form-group">
    <label for="pwd">Branch</label>
    <input type="text" class="form-control" id="branch" name="branch" required>
  </div>
  <div class="form-group">
    <label for="pwd">Zeal ID</label>
    <input type="text"  maxlength="8" class="form-control" id="zeal" name="zeal" required>
  </div>
  <center>
  <button type="submit" class="btn btn-primary">Submit</button>
  </center>
</form>
</div>
<br><br>
<h3>Rules</h3>

<h4>1. Every User will be awarded 250 Credit points to start the challenge.</h4>
<h4>2. There are three sections i.e. 10 points, 20 points and 30 points sections.</h4>
<h4>3. The Challenger can buy question for his/her credit points and send to any contender on the online list.</h4>
<h4>4. The Contender also has the choice of skipping the question, in this case the points will be awarded back to the challenegr.</h4>
<h4>5. User with the maximun points wins after the time limit is over wins.</h4>
<h4>6. The game will last for 45 minutes.</h4>


<br><br>
<center>
  <div class="row">
    <div class="col-md-6">
<button class="btn btn-primary" disabled>Designed and Developed by :</button>
<h5>Piyush Anand Verma</h5>
<h5>Sagor Chakraborty</h5>
<h5>Shivam Singh</h5>
    </div>
    <div class="col-md-6">
<button class="btn btn-primary" disabled>Questions set by</button>
<h5>Sukriti Mishra</h5>
<h5>Vamika Sharma</h5>
  </div>
</div>
<div class="row">
 <div class="col-md-12">
  <button class="btn btn-primary" disabled>Other team members and volunteers</button>
  <div >
  <h5>Sanya Bansal</h5>
  <h5>Aditya Yadav</h5>
  <h5>Prakahar Tiwari</h5>
  <h5>Vishesh Dwivedi</h5>
  </div>
  <h5>Neha Bazad</h5>
  <h5>Roopal</h5>
  <h5>Nishi</h5>
  <h5>Priyanka</h5>
  <h5>Shivika Kansal</h5>
  </div>
</div>
</center>
</body>
</html>