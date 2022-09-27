
<html>
<head>
    <title> Urlap</title>
    <style>
        body {
            background-color: #98FB98;
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
            border: 1px;
            border-radius: 05px;
            padding: 7px 4px 10px 28px;
        }
        h1 {
            font-family: 'Times New Roman', serif;
        }
        h2 {
            font-family: 'Times New Roman', serif;
        }
		
    </style>
</head>
<body>
    <center>
        <h1> Nyílt napok űrlap</h1>
    </center>
    <center>
        <h2> Új űrlap hozzáadása:
    </center>
    <div class="container">
        <form action="urlap_code.php" method="POST">
            <label> Téma: </label>
            <input type="text" class="txt" name="tema" placeholder="Téma megnevezése" /><br>

            <label> Vezető: </label>
            <input type="text" class="txt" name="vezeto" placeholder="Gyakorlat vezető megnevezése" /><br>

            <label>Terület: </label>
            <select name="terulet">
                <option value="">Teruletek</option>
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

            <label>Helyszín: </label>
            <input type="text" class="txt" name="helyszin" placeholder="Gyakorlat helyszíne" /><br>

            <label> Leírás: </label>
            <input type="text" class="txt" name="leiras" placeholder="Rövid leírás" /><br>

            <label> Értékelés: </label>
            <input type="text" class="txt" name="ertekeles" placeholder="Értékelés: 1-10" /><br>

            <label> Költség: </label>
            <input type="text" class="txt" name="koltseg" placeholder="Költség össze" /><br>

            <label> Kezdés dátuma:</label>
            <input type="date" class="txt" name="kezdesdatum" placeholder="éééé-hh-nn" /><br>

            <input style="font-size: 25px;background-color: #77dd77;font-family: 'Times New Roman', serif;border-radius: 8px;" type="submit" name="insert" class="btn btn-primary" value="Mehet"><br>
			
        </form>
    </div>
</body>
<html>