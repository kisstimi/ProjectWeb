<?php
require_once('connection.php');

$cim= $leir= $ido = '';
$cim= $_POST['mcimee'];
$leir =$_POST['mleirass'];
$ido = $_POST['mideje'];
$tema = $_POST['tema'];

$sql="INSERT INTO megjegyzesek (mcim, mleiras, m_datum,tema) VALUES ('$cim', '$leir', '$ido','$tema')";
$sql_run = mysqli_query($conn,$sql);

	if($sql_run)
{
	header("Location: megjegyzesek.php");
}
else
{
	echo "Error :".$sql;
}
?>