
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
		select {
            width: 40%;
			height: 5%;
			border: 1px;
			border-radius: 05px;
			padding: 8px 15px 8px 15px;
			margin: 10px 0px 15px 0px;
			box-shadow: 1px 1px 2px 1px grey;
        }
	</style>
</head>
<body>
	<center>
		<h1>Keress űrlapot:</h1><br />
		<form action="" method="POST">
			<select name="teruletneve">
                <option value="">Területek</option>
                <option value="Web programozás">Web programozás</option>
                <option value="Beágyazott rendszerek">Beágyazott rendszerek</option>
                <option value="Gépi tanulás">Gépi tanulás</option>
                <option value="Adatbányászat">Adatbányászat</option>
                <option value="PR Tevékenység">PR Tevékenység</option>
                <option value="Rendszergazda">Rendszergazda</option>
                <option value="Robot vezérlés">Robot vezérlés</option>
                <option value="Szoftver fejlesztés">Szoftver fejlesztés</option>
                <option value="Tervező asszisztens">Tervező asszisztens</option>
            </select><br><br>
			<input type="submit" name="search" value="Keresés" />
			<input type="submit" name="delete" value="Törlés" />
			
		</form>
		<?php
		require_once('connection.php');
		if (isset($_POST['search'])) {

			$teruletneve= $_POST['teruletneve'];

			$query = "SELECT * FROM gyak where terulet_nev='$teruletneve' ";
			$query_run = mysqli_query($conn, $query);
			while ($row = mysqli_fetch_array($query_run)) {
		?>
				<form action="" method="POST">
					<label>Űrlap címe:</label><br />
					<input type="text" name="tema" value="<?php echo $row['tema'] ?>" /><br>

					<label>Vezető tanár:</label><br />
					<input type="text" name="vezeto" value="<?php echo $row['vezeto'] ?>" /><br>

					<label>Érintett terület:</label><br />
					<input type="text" name="terulet_nev" value="<?php echo $row['terulet_nev'] ?>" /><br>
				
					<label>Helyszín:</label><br />
					<input type="text" name="helyszin" value="<?php echo $row['helyszin'] ?>" /><br>
					
					<label>Leírás:</label><br />
					<input type="text" name="leiras" value="<?php echo $row['leiras'] ?>" /><br>
					
					<label>Értékelés:</label><br />
					<input type="text" name="ertekeles" value="<?php echo $row['ertekeles'] ?>" /><br>
					
					<label>Tanulmány költsége:</label><br />
					<input type="text" name="kolsteg" value="<?php echo $row['koltseg'] ?>" /><br>
					
					
				</form>
		<?php
			}
		}
		?>
		
		<?php
		require_once('connection.php');
		if (isset($_POST['delete'])) {
			$teruletneve= $_POST['teruletneve'];
			$deletequery = "DELETE FROM gyak where terulet_nev='$teruletneve' ";
				$deleteresult = mysqli_query($conn, $deletequery);
	
		}	
		?>
		
		
	</center>
</body>
</html>