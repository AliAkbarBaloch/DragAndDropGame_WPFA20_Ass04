<!DOCTYPE html>
<html>
<head>
	<title>Score Board</title>
</head>
<body>
   <?php 
      $conn=mysqli_connect("localhost","root","","a4");
	   	if (!$conn) {
	   		echo mysqli_error();
	   		# code...
	   	}
	   	$score= strtoupper(substr(md5(time().rand(10000,99999)), 0, 2));
	   	$level=1;
	   	$date = date('Y-m-d H:i:s');

	   	session_start();
	   	$player_id=$_SESSION['player_id'];
        $player_name=$_SESSION['player_name'];
        // $score=$_POST['points'];
        // $level=$_POST['level'];
        
        
        $_SESSION['score']=$score;
        $_SESSION['level']=$level;
        $_SESSION['date']=$date;
        
        
   

        $sql="INSERT INTO game(Player_name,Player_ID,Score,Level,Time) VALUES('".$_SESSION['player_name']."','".$_SESSION['player_id']."','".$_SESSION['score']."','".$_SESSION['level']."','".$_SESSION['date']."')";
        if ($conn->query($sql)==true) {
        	echo "<script>alert('Inserted Row into Database and Now System is Restarted From Entry');
                     window.location='Entry.php';
   		           </script>";
        }else{
        	echo "<script>alert('Not Inserted Data');
   		          </script>";

        }

    ?>
</body>
</html>