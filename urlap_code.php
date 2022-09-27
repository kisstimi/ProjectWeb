<?php
require_once('connection.php');

if(isset($_POST['insert'])){
	
	$tema= $_POST['tema'];
	$vezeto= $_POST['vezeto'];
	$terulet= $_POST['terulet'];
	$helyszin= $_POST['helyszin'];
	$leiras= $_POST['leiras'];
	$ertekeles= $_POST['ertekeles'];
	$koltseg = $_POST['koltseg'];
	$kezdesdatum= $_POST['kezdesdatum'];
	
	$query= "INSERT INTO `gyak`(`tema`, `vezeto`, `terulet_nev`, `helyszin`, `leiras`, `ertekeles`, `koltseg`, `kezdet`) VALUES ('$tema', '$vezeto', '$terulet', '$helyszin', '$leiras','$ertekeles', '$koltseg','$kezdesdatum')";
	$query_run = mysqli_query($conn,$query);
	
	
	if($query_run)
{
	header("Location: Urlap.php");
}
else
{
	echo "Error :".$query;
}
	
	
}



?>
