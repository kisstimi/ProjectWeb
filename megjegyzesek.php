<?php
include_once('linkk.php');
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
            font-size: 19px;
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
        <form action="megjegyzesek_code.php" method="POST">
            <center>
                <h1>Megjegyzés írása:</h1><br />
            </center>

            <label>Megjegyzés:</label>
            <input type="text" name="mcimee" class="txt">
			
            <label>Megjegyzeses leirasa:</label>
            <input type="text" name="mleirass" class="txt">

            <label>Dátum:</label>
            <input type="date" name="mideje" class="txt">
			
			<label>Témák: </label>
            <select name="tema">
				<option value="">Témák</option>
                <option value="Te is lehetsz tanár">Te is lehetsz tanár</option>
                <option value="A gépészmérnök projektmenedzser">A gépészmérnök projektmenedzser</option>
                <option value="Digitális termékkészítés A-tól Z-ig">Digitális termékkészítés A-tól Z-ig</option>
                <option value="A sebesség és a fokozatok">A sebesség és a fokozatok</option>
                <option value="Mechatronika,Gépészmérnöki">Mechatronika,Gépészmérnöki</option>
                <option value="A kertészmérnöki szak bemutatása">A kertészmérnöki szak bemutatása</option>
                <option value="A tájépítész szak bemutatása">A tájépítész szak bemutatása</option>
                <option value="Az agrár és erdőmérnök képzést bemutatása">Az agrár és erdőmérnök képzést bemutatása</option>
                <option value="Bogyós gyümölcsök termesztése">Bogyós gyümölcsök termesztése</option>
                <option value="Kémia, miért is?">Miért is fontos a fizika?</option>
				<option value="Életmenő matematika">Életmenő matematika</option>
				<option value="Miért is fontos a fizika?">Miért is fontos a fizika?</option>
            </select><br><br>
			
            <button type="submit" name="create" class="btn btn-primary">Küldés</button>
        </form>
    </div>
</body>
</html>