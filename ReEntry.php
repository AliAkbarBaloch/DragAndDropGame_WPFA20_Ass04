<!DOCTYPE html>
<html>
<head>
	<title>Entry Level</title>
	<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
	<?php  session_start(); ?>
	<div class="container" style="margin-top: 5%;width: 25%;">
	<p style="color: red;"><b>Change the ID</b></p>
   <form action="Checker.php" method="post">
	  <div class="form-group">
	    <label><b>Player Name:</b></label>
	    <input type="text" class="form-control" name="Player_name" id="Player_name" value=<?php echo $_SESSION['player_name']; ?>>
	  </div>
	  <div class="form-group">
	    <label><b>Player_ID</b></label>
	    <input type="text" class="form-control" name="Player_ID" id="Player_ID" value=<?php echo $_SESSION['player_id']; ?>>
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
	</div>
</body>
</html>