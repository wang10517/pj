<?php
	session_start();
	$USN = $_POST["username"];
	$PWD = $_POST["pwd"];
	$con = mysqli_connect('localhost','root','990622$Grow','3241_pj');
	If (!$con)
	{ die('Could not connect'.mysqli_connect_error());
	}
	$sql= "select PWD from login where UID = '". $USN ."'";
	$result=mysqli_query($con, $sql) or die(mysqli_error($con));
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$input_p = $row['PWD'];
	if($input_p === $PWD)
	{ 
	 $_SESSION["username"] = $USN;
	 header("Location: http://localhost:8080/3241_pj/homepage.php");
   	 exit;
	}
	else{
	 echo "Invalid password.";
	}
?>
