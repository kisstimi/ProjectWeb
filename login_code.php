<?php
require_once('connection.php');

if(isset($_POST['login'])){
	$email = $_POST['email'];
	$pwd = $_POST['password'];
	$type = $_POST['feltipusa'];
	$password = MD5($pwd);
	$sql = "SELECT * FROM regisztracio WHERE Email='$email' AND Password='$password' AND felhasznalotipusa='$type'";
	$result = mysqli_query($conn, $sql);	
	
	if($result){
		if($type=="PR felelős"){
			header("Location: pr_felelos.php");
		}
		else if($type=="Oktató"){
			header("Location: megjegyzesek.php");
		}
		else{
			echo'no result';
		}
	}
}

	


?>