<?php
include_once('reg_link.php');
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
            font-size: 15px;

        }
    </style>
</head>
<body>
    <div class="container">
        <form class="form-horizontal" action="registration_code.php" method="POST">
            <h1>Regisztráció</h1>

            <label>Vezetéknév:</label>
            <input type="text" class="txt" name="firstname">

            <label>Keresztnév:</label>
            <input type="text" class="txt" name="lastname">

            <label>Neme:</label><br />
            <label class="radio-inline"><input type="radio" name="gender" value="Male">Férfi</label>
            <label class="radio-inline"><input type="radio" name="gender" value="Female">Nő</label><br /><br />

            <label>Email:</label>
            <input type="email" class="txt" name="email">

            <label>Jelszó:</label>
            <input type="password" class="txt" name="password">

            <label>Regisztráció ideje:</label>
            <input type="date" class="txt" name="registrationdate">

            <label>Felhasználó típusa:</label></br>

            <label class="radio-inline"><input type="radio" name="feltipusa" value="PR felelős">PR felelős</label>
            <label class="radio-inline"><input type="radio" name="feltipusa" value="Oktató">Oktató</label>
            <label class="radio-inline"><input type="radio" name="feltipusa" value="Öreg diák">Öreg diák</label><br /><br />
			
			<div class="form-group">
				<input type="checkbox" name="agree" value="Elfogadom oket"> Elfogadom a felhasználói feltételeket. 
			</div><br/>

            <button type="submit" name="Submit" class="btn btn-primary" value="Submit">Submit</button>
    </div>
    </form>
    </div>
</body>
</html>

