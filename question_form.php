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
    
</style>
</head>
<body>
<br>
<div class="container">
	<div align="center">Form For Question</div>
	
	<form action="quest_insert.php" method="POST">

    <label for="email">Question</label>
  <div class="form-group">
    <textarea id="question" name="question" rows="3" cols="100"></textarea>

  <button type="submit" class="btn btn-primary btn-lg" style="float: right;">Submit</button>
  </div>
  <div class="form-group">
    <label >Option 1</label>
    <input type="text" class="form-control" id="option1" name="option1">
  </div><div class="form-group">
    <label >Option 2</label>
    <input type="text" class="form-control" id="option2" name="option2">
  </div>
  <div class="form-group">
    <label >Option 3</label>
    <input type="text" class="form-control" id="option3" name="option3">
  </div>
  <div class="form-group">
    <label >Option 4</label>
    <input type="text" class="form-control" id="option4" name="option4">
  </div>
  <div class="form-group">
    <label >Points</label>
    <input type="text" class="form-control" id="points" name="points">
  </div>
  <div class="form-group">
    <label >Answer</label>
    <input type="text" class="form-control" id="ans" name="ans">
  </div>
  <center>
  </center>
</form>
</div>
</body>
</html>