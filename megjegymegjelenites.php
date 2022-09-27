<?php

include_once('linkk.php');
?>
<html>
<head>
	<title>Megjegyzesek keresese</title>
	<style>
		body {
			background-color: #98FB98;
		}

		input {
			width: 40%;
			height: 5%;
			border: 1px;
			border-radius: 05px;
			padding: 8px 15px 8px 15px;
			margin: 10px 0px 15px 0px;
			box-shadow: 1px 1px 2px 1px grey;
		}

		h1 {
			font-family: 'Times New Roman', serif;
		}

		input {
			font-family: 'Times New Roman', serif;
			font-size: 18px;
		}

		label {
			font-family: 'Times New Roman', serif;
			font-size: 18px;
		}
	</style>
</head>
<body>
	<center>
		<h1>Keress megjegyzéseket:</h1><br />
		<form action="" method="POST">
			<input type="text" name="date" placeholder="Dátum" /><br />
			<input type="submit" name="search" value="Keresés" />
			<input type="submit" name="delete" value="Törlés" />
			
		</form>
		<?php
		require_once('connection.php');
		if (isset($_POST['search'])) {

			$date = $_POST['date'];

			$query = "SELECT * FROM megjegyzesek where m_datum='$date' ";
			$query_run = mysqli_query($conn, $query);
			while ($row = mysqli_fetch_array($query_run)) {
		?>
				<form action="" method="POST">
					<label>Megjegyzés címe:</label><br />
					<input type="text" name="mcim" value="<?php echo $row['mcim'] ?>" /><br>

					<label>Leírás:</label><br />
					<input type="text" name="mleiras" value="<?php echo $row['mleiras'] ?>" /><br>

					<label>Létrehozva:</label><br />
					<input type="text" name="m_datum" value="<?php echo $row['m_datum'] ?>" /><br>
					
					<label>Téma:</label><br />
					<input type="text" name="tema" value="<?php echo $row['tema'] ?>" /><br>
				</form>
		<?php
			}
		}
		?>
		
		<?php
		require_once('connection.php');
		if (isset($_POST['delete'])) {
			$date = $_POST['date'];
			$deletequery = "DELETE FROM megjegyzesek where m_datum='$date' ";
				$deleteresult = mysqli_query($conn, $deletequery);
	
		}	
		?>		
	</center>
</body>
</html>