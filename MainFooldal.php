<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  font-family: 'Times New Roman', serif;
  
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
  font-family: 'Times New Roman', serif;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
  font-family: 'Times New Roman', serif;
}
body {
            background-image: url('Images/photo12.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;


        }
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

.row {margin: 0 -5px;}

.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
h1 {
            font-family: 'Times New Roman', serif;
            font-size: 350%;
        }
		
h2{
	font-family: 'Times New Roman', serif;
}
h4{
	font-family: 'Times New Roman', serif;
	font-size: 150%;
}
h3{
	font-family: 'Times New Roman', serif;
}
p{
	font-family: 'Times New Roman', serif;
}
h5{
	font-family: 'Times New Roman', serif;
            font-size: 250%;
}      
</style>
</head>
<body>

<div class="topnav">
		<a href="Fooldal.php" id="nyilt" >Nyílt napok</a>
        <a href="Registration.php" id="reg">Regisztráció</a>
        <a href="Login.php" id="be">Belépés</a>
        <a href="megjegyzesek.php" id="vel">Véleményed</a>
        <a href="photos.php" id="pp">Galéria</a>
        <a href="rolunk.php" id="contact">Elérhetőségek</a>
</div>
<div style="margin-left:200px;" class="container">
        <h1 align="center">Nyílt napok a Sapientián</h1><br />
<div class="row">

        <div class="column">
            <div class="card">
                <div class="container">
					<h4>Tudnivalók</h4>
                    <p>2021 a online oktatás folytatását jelentette. Ennek ellenére, a nyílt napok online kereteken belül lesz megtartva. A tanszékekre kattintva, megtekinthetővé válna a különböző programok időpontja, illetve a google meet linkek is, ahol ezek meg lesznek tartva.</p>
        
				</div>
            </div>
        </div>
		
		<div class="column">
            <div class="card">
                <div class="container">
					<h3>Járványügyi tájékoztatás</h3>
                    <p>Kötelezettségek fertőzés vagy ennek gyanúja esetén:</p>
					<h3>Amennyiben valakinek:</h3>
					<p>vírusos betegségre utaló tünetei vannak</p>
					<p>SARS-CoV-2-vel diagnosztizálták</p>
					<p>közvetlen kapcsolatban állt vagy áll egy SARS-CoV-2-vel diagnosztizált személlyel</p>
					<h3>akkor kötelessége:</h3>
					<p>Távol maradni az egyetemtől és önkéntes, azonnali (otthoni) elkülönítésbe / karanténba vonulni
					Telefonon értesíteni a családorvosát és követni utasításait
					Értesíteni a közvetlen munkahelyi felettesét az egyetemen</p>

                </div>
            </div>
        </div>
		
		<div class="column">
            <div class="card">
                <div class="container">
					<h5>Kellemes időtöltést</h5>
                </div>
            </div>
        </div>
		
    </div>
</div>

</body>
</html>
