<?php
include_once('linkk.php');
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-image: url('Images/photo20.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            backdrop-filter: blur(5px);
        }

        h1 {
            font-size: 400%;
            font-family: 'Times New Roman', serif;
        }

        h2 {
            font-family: 'Times New Roman', serif;
        }

        .grid-container {
            display: grid;
            grid-template-columns: auto auto auto;
            padding: 5px;;
        }

        .grid-item {
            border: 1px solid rgba(0, 0, 0, 0.8);
            padding: 5px;
            font-size: 20px;
            text-align: center;

        }

        p {
            font-family: 'Times New Roman', serif;
        }

        container {
            margin: 25px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 align="center">Előadók</h1><br />
        <div class="grid-container">
            <div class="grid-item">
                <img src="Eloadok/FulopOtilia.jpg" style="width:50%">
                <h2>dr.Fülöp Otília</h2>
                <p class="title">Alkalmazott Nyelvészeti Tanszék</p>
            </div>

            <div class="grid-item">
                <img src="Eloadok/VajdaAndras.jpg" style="width:50%">
                <h2>dr.Vajda András</h2>
                <p class="title">Alkalmazott Nyelvészeti Tanszék</p>
            </div>

            <div class="grid-item">
                <img src="Eloadok/SantaAgnes1.jpg" style="width:50%">
                <h2>dr.Sántha Ágnes</h2>
                <p class="title">Alkalmazott Nyelvészeti Tanszék</p>
            </div>

            <div class="grid-item">
                <img src="Eloadok/KovacsBarna.jpg" style="width:50%">
                <h2>dr.Kovács Barna</h2>
                <p class="title">Alkalmazott Nyelvészeti Tanszék</p>
            </div>

            <div class="grid-item">
                <img src="Eloadok/Katai.jpg" style="width:50%">
                <h2>dr. Mátyás László</h2>
                <p class="title">Agrármérnöki Tanszék</p>
            </div>

            <div class="grid-item">
                <img src="Eloadok/Katai.jpg" style="width:50%">
                <h2>dr. Kilár Ferenc</h2>
                <p class="title">Agrármérnöki Tanszék</p>
            </div>

            <div class="grid-item">
                <img src="Eloadok/makozoltan.jpg" style="width:50%">
                <h2>dr. Makó Zoltán</h2>
                <p class="title">Agrármérnöki Tanszék</p>
            </div>

            <div class="grid-item">
                <img src="Eloadok/bakoslevente.jpg" style="width:50%">
                <h2>dr. Bakos Levente</h2>
                <p class="title">Gépészmérnöki Tanszék</p>
            </div>

            <div class="grid-item">
                <img src="Eloadok/matemarton1.jpg" style="width:50%">
                <h2>dr. Máté Márton</h2>
                <p class="title">Gépészmérnöki Tanszék</p>
            </div>

            <div class="grid-item">
                <img src="Eloadok/pasztorjudit.jpg" style="width:50%">
                <h2>dr. Pásztor Judit</h2>
                <p class="title">Gépészmérnöki Tanszék</p>
            </div>

            <div class="grid-item">
                <img src="Eloadok/NyaradiImreIstvan.jpg" style="width:50%">
                <h2>dr. Nyárádi Imre István</h2>
                <p class="title">Kertészmérnöki Tanszék</p>
            </div>

            <div class="grid-item">
                <img src="Eloadok/BandiAttila.jpg" style="width:50%">
                <h2>dr. Bandi Attila</h2>
                <p class="title">Kertészmérnöki Tanszék</p>
            </div>

            <div class="grid-item">
                <img src="Eloadok/Katai.jpg" style="width:50%">
                <h2>dr. Kátai Zoltán</h2>
                <p class="title">Matematika-Informatika Tanszék</p>
            </div>

            <div class="grid-item">
                <img src="Eloadok/MartonLorinc.jpg" style="width:50%">
                <h2>dr. Márton Lőrinc</h2>
                <p class="title">Villamosmérnöki Tanszék</p>
            </div>

            <div class="grid-item">
                <img src="Eloadok/bendekklara.jpg" style="width:50%">
                <h2>dr. Benedek Klára</h2>
                <p class="title">Kertészmérnöki Tanszék</p>
            </div>

            <div class="grid-item">
                <h2>dr. Horváth Zsófia</h2>
                <p class="title">Gépészmérnöki Tanszék</p>
            </div>

            <div class="grid-item">
                <h2>dr. Kántor József</h2>
                <p class="title">Gépészmérnöki Tanszék</p>
            </div>



            <div class="grid-item">
                <h2>dr. Ványolós Endre</h2>
                <p class="title">Kertészmérnöki Tanszék</p>
            </div>

            <div class="grid-item">
                <h2>dr. Farkas Attila</h2>
                <p class="title">Kertészmérnöki Tanszék</p>
            </div>

            <div class="grid-item">
                <h2>Ferencz Katalin</h2>
                <p class="title">Villamosmérnöki Tanszék</p>
            </div>

            <div class="grid-item">
                <h2>Moni Róbert</h2>
                <p class="title">Villamosmérnöki Tanszék</p>
            </div>

            <div class="grid-item">
                <h2>Kovács Zsuzsanna Szabina</h2>
                <p class="title">Villamosmérnöki Tanszék</p>
            </div>

            <div class="grid-item">
                <h2>dr. Mara Gyöngyvér</h2>
                <p class="title">Agrármérnöki Tanszék</p>
            </div>
        </div>
    </div>
</body>
</html>