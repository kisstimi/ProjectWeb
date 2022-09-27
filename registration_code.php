<?php

require_once('connection.php');

if(isset($_POST['agree'])){
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$pwd = $_POST['password'];
	$password = MD5($pwd);
	$rdate = $_POST['registrationdate'];
	$type = $_POST['feltipusa'];
	$type1 = $_POST['agree'];

	$sql = "INSERT INTO regisztracio (Firstname,Lastname,Gender,Email,Password,regDate,felhasznalotipusa,feltetel) VALUES ('$fname','$lname','$gender','$email','$password','$rdate', '$type','$type1')";
	$query_run = mysqli_query($conn,$sql);
	
	if(query_run){
		header("Location: login.php");
	}
	else{
	echo "Error :".$sql;
}

	
}
?>