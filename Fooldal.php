<?php
include_once('linkk.php');
?>
<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      background-image: url('Images/photo13.jpg');
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
      background-color: #808000;
      padding: 10px;
    }

    .grid-item {
      background-color:	#D4AF37;
      border: 1px solid #000000;
      padding: 10px;
      font-size: 35px;
      text-align: center;
    }

    p {
      font-family: 'Times New Roman', serif;

    }
	container{
		margin: 50px;
	}
  </style>
</head>

<body>
<div class="container">
  <h1 align="center">Nyílt napok</h1><br/>
  <div class="grid-container">
    <div class="grid-item">
      <p><a href="anyt.php" style="color:#000000">Alkalmazott Nyelvészeti Tanszék</a></p>
    </div>
    <div class="grid-item">
      <p><a href="gt.php" style="color:#000000">Gépészmérnöki Tanszék</a></p>
    </div>
    <div class="grid-item">
      <p><a href="kt.php" style="color:#000000">Kertészmérnöki Tanszék</a></p>
    </div>
    <div class="grid-item">
      <p><a href="mit.php"style="color:#000000" >Matematika-Informatika Tanszék</a></p>
    </div>
    <div class="grid-item">
      <p><a href="vt.php" style="color:#000000">Villamosmérnöki Tanszék</a></p>
    </div>
    <div class="grid-item">
      <p><a href="at.php"style="color:#000000" >Agrármérnöki Tanszék</a></p>
    </div>
  </div>
 </div>
</body>

</html>