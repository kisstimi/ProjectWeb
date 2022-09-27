<?php
require_once('connection.php');
session_start();
if(!isset($_SESSION['sess_login'])){
	header("Location:Login.php");
	
}
else{
	
?>
<html>
<head>
<style>
body {
            background-color: #98FB98;
        }
h1{
	font-family: 'Times New Roman', serif;
}

</style>
</head>
<body>
<div class="jumbotron">
	<center>
		<h1>Üdvözöllek <?=$_SESSION['sess_login'];?><a href="logut.php">kijelentkezes</a></h1>
	</center>
	
</div>
</body>
</html>
<?php
}
?>