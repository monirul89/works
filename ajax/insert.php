<?php
	
	$server = "localhost";
	$user = "root";
	$password = "";
	$database = "ajax";
	
	$conn = mysqli_connect($server, $user, $password, $database);
	
	if(!$conn){
		die('Could Not Connect: '.mysqli_connect_errno());
	}
	else{
		$name=test_input($_POST['name']);
		$email=test_input($_POST['email']);
		$phone=test_input($_POST['phone']);
		
		$sql="INSERT INTO ajax_insert(name, email, phone) VALUES('$name','$email','$phone')";
		
		if(mysqli_query($conn, $sql)){
			echo "One record Insert to Database!";
		}else{
			echo "Fail to Insert";
			
		}
		mysqli_close($conn);
		
	}
	
	function test_input($data){
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlentities($data);
		return $data;
	}
?>