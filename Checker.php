<!DOCTYPE html>
<html>
<head>
	<title>Checker</title>
</head>
<body>
   <?php 


   	session_start();
   	$conn=mysqli_connect("localhost","root","","a4");
   	if (!$conn) {
   		echo mysqli_error();
   		# code...
   	}

   	//Form Data
   	$player_name=$_POST['Player_name'];
   	$player_id=$_POST['Player_ID'];

   //Session Data
   	$_SESSION['player_id']=$player_id;
    $_SESSION['player_name']=$player_name;

  //Checking Player id from database
   	$Q="SELECT Player_ID from game";
   	    $result=mysqli_query($conn,$Q);
   	    while ($row=mysqli_fetch_array($result)) {
   	    	$check=$row['Player_ID'];
   	    }
   	if ($check==$_POST['Player_ID']) {

   		
   		

   		echo "<script>alert('id {$check} is Already Available Please change ID');
                   window.location='ReEntry.php';
   		</script>";
   	}
   	else{

           $_SESSION['Login']="YES";
           header('Location:Game.php');

   	}


    ?>
</body>
</html>