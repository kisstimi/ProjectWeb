<?php
session_start();
include_once('linkk.php');
require_once('connection.php');
if(isset($_POST['login'])){
	$email = $_POST['email'];
	$pwd = $_POST['password'];
	$password = MD5($pwd);
	$type = $_POST['feltipusa'];
	$sql = "SELECT * FROM regisztracio WHERE Email='$email' AND Password='$password' AND felhasznalotipusa='$type'";
	$result = mysqli_query($conn, $sql);
	if($result->num_rows > 0){
		$_SESSION['email'] = $email;
		if($type=="PR felelős"){
			header("Location: pr_felelos.php");
		}
		else if($type=="Öreg diák"){
			header("Location: oregdiak.php");
		}
		else{
			header("Location: oktato.php");
			
		}
		
	}
}

?>
<html>
<head>
  <style>
    body {
      background-color: #98FB98;
    }

    h1 {
      font-family: 'Times New Roman', serif;
    }

    label {
      font-family: 'Times New Roman', serif;
    }

    button {
      font-family: 'Times New Roman', serif;
	  font-size: 25px;
	  background-color: #77dd77;
	  border-radius: 8px;
    }

    .container {
      padding: 25px 4px 10px 19px;
      width: 30%;
      height: 40%;
      margin-left: 31%;
      font-family: 'Times New Roman', serif;
      font-size: 15px;
    }

    .txt {
      width: 100%;
      height: 5%;
      border: 1px;
      border-radius: 05px;
      padding: 20px 15px 20px 15px;
      margin: 10px 0px 15px 0px;
      font-family: 'Times New Roman', serif;
      font-size: 17px;

    }
	select {
            width: 100%;
            height: 5%;
            border: 1px;
            border-radius: 05px;
            padding: 20px 15px 20px 15px;
			margin: 10px 0px 15px 0px;
			font-family: 'Times New Roman', serif;
            font-size: 17px;
        }
  </style>
</head>

<body>
  <div class="container">
    <form class="form-horizontal" method="POST">
      <h1>Bejelentkezés</h1>

      <label>Email:</label>
      <input type="email" class="txt" name="email" id="email">

      <label>Jelszó:</label>
      <input type="password" class="txt" name="password" id="pwd">
	  
	  <label>Felhasznaló:</label>
      <select name="feltipusa">
                
                <option value="PR felelős">PR felelős</option>
                <option value="Oktató">Oktató</option>
                <option value="Öreg diák">Öreg diák</option>
                
            </select><br><br>


      <button type="submit" name="login" class="btn btn-primary">Belépés</button>

  </div>
  </form>
  </div>
</body>
</html>