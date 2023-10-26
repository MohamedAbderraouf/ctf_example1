
<?php
session_start();
if(!isset($_SESSION['information'])) 
header("Location: ../login.html");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="dashboard.css">
    <title>DzAnnonce</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="index.js"></script>
</head>
<body>
    <nav>
        <div class="titre">
            <h1>DzAnnonce</h1>
        </div>
        <ul>
            <li><a href="ads.php">Home</a></li>
            <li><a href="dashbord17381738.php" class="active" >Dashboard</a></li>
            <li><a href="../conditions/contact.php">Contact</a></li>
        </ul>
    </nav>
    <main>
        <div class="card">
            <h2>Ajouter un annonce</h2>
            <form id="form"  action="./dashbord17381739.php" method = 'POST' enctype="multipart/form-data">
               
                    <label for="ftexte">Texte:</label><br>
                    <textarea id="ftexte" name="text" style="height:180px"></textarea><br>
                    <label for="fimage">image:</label><br>
                    <input type="file" id="fimage" name="image" onchange="return fileValidation()"><br>
                    <input type="submit" value="Ajouter">
            </form>
        </div>
    </main>
</body>
</html>

