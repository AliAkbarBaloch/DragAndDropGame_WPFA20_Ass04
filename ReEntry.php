<!DOCTYPE html>
<html>
<head>
	<title>Entry Level</title>
	<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
	<script type="text/javascript">
    	
    	function nextPage(){
    		location.replace('Result.php');
    	}
    </script>
	<?php  session_start(); ?>
	<div class="container" style="margin-top: 5%;width: 25%;">
	<p style="color: red;"><b>Change the ID</b></p>
   <form action="Checker.php" method="post">
	  <div class="form-group">
	    <label><b>Player Name:</b></label>
	    <input type="text" class="form-control" name="Player_name" required id="Player_name" value=<?php echo $_SESSION['player_name']; ?>>
	  </div>
	  <div class="form-group">
	    <label><b>Player_ID</b></label>
	    <input type="text" class="form-control" name="Player_ID" id="Player_ID" required value=<?php echo $_SESSION['player_id']; ?>>
	  </div>
	  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
	  <a type="submit" class="btn btn-primary" style="margin-left: 70%;margin-top: -20%; color: white;" onclick="nextPage();">ResultChecking</a>
	</form>
	</div>
</body>
</html>