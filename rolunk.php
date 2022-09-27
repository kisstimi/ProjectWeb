<?php
include_once('linkk.php');
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: 'Times New Roman', serif;
            margin: 0;
            background-image: url('Images/photo12.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            backdrop-filter: blur(5px);
        }

        html {
            box-sizing: border-box;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        .column {
            float: left;
            width: 33.3%;
            margin-bottom: 16px;
            padding: 0 8px;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: 8px;
			text-align: center;
			background-color: #E8E8E8;
        }

        .container {
            padding: 0 16px;
        }

        .container::after,
        .row::after {
            content: "";
            clear: both;
            display: table;
        }
    </style>
</head>
<body>
    <div class="column">
        <div class="card">
            <div class="container">
                <h2>Marosvásárhelyi Kar</h2>
                <p>Târgu-Mureş/Corunca (Marosvásárhely/Koronka), 1C</p>
				<p>Postacím: 540485 Târgu-Mureş, O.p. 9, C.p. 4</p>
				<p>E-mail: office@ms.sapientia.ro</p>
                <p>Tel: +40 265 206 210</p>
				<p>fax: +40 265 206 211</p>
            </div>
        </div>
    </div>
	<div class="column">
        <div class="card">
            <div class="container">
                <h2>Sepsiszentgyörgyi Tanulmányi Központ</h2>
                <p>520036 Sepsiszentgyörgy (Sfantu-Gheorghe)</p>
                <p>Csíki utca 50. sz. (str. Ciucului nr. 50)</p>
				<p>E-mail: office@ms.sapientia.ro</p>
				<p>Tel.: +40 371 368 451</p>
            </div>
        </div>
    </div>
	<div class="column">
        <div class="card">
            <div class="container">
                <h2>Kolozsvári kar</h2>
                <p>400193 Cluj-Napoca, Tordai út (Calea Turzii) 4. sz., Kolozs megye</p>
				<p>E-mail: office@kv.sapientia.ro</p>
                <p>Tel.: +40-364-401-458</p>
				<p>Fax.: +40-364-410-069</p>
            </div>
        </div>
    </div>
</body>
</html>



