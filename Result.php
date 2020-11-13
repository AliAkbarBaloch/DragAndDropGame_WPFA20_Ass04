<!DOCTYPE html>
<html>
<head>
	<title>Score Board</title>
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    
</head>
<body style="background-color: black;">
   <?php 
      $conn=mysqli_connect("localhost","root","","a4");
	   	if (!$conn) {
	   		echo mysqli_error();
	   		# code...
	   	}
	   	
      $sql="SELECT * from game ORDER BY Score DESC LIMIT 10";

      $result=mysqli_query($conn,$sql);

    ?>
    <div style="margin-top: 1%;">
    <table class="table table-striped table-sm table-dark">
      <thead>
        <h1 style="color: white; text-align: center;">Top 10 Scores Against Player Name </h1>
        <tr>
          <th scope="col">Player Name</th>
          <th scope="col">Score</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row=mysqli_fetch_array($result)) { ?>
        <tr>
          <td class="bg-primary"><?php echo $row['Player_name']; ?></td>
          <td class="bg-success"><?php echo $row['Score']; ?></td>
        </tr>
      <?php }; ?>
      </tbody>
    </table>
    </div>
    <br>
    <a href="Entry.php">Click For Entry</a>
</body>
</html>