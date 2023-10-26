

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
            <li><a href="ads.php" class="active">Home</a></li>
            <?php

	session_start();
	if(isset($_SESSION['information'])) 
            echo '<li><a href="dashbord17381738.php">Dashboard</a></li>'; ?>
            
            <li><a href="../conditions/contact.php">Contact</a></li>
        </ul>
    </nav>
    <div id="annonces-container">
        
        <?php

require('../crids/dbconn.php');


$ar = getAnnonces();

for ($i = 0 ;$i<9;$i=$i+2)
{

$v1 = $ar[$i];
$v2 = $ar[$i+1];

echo "<div id='annonces'>
            <div class='annonce-card'>
                <div class='image'>
                    <img src='./images/".$v1['emplacement']."' alt=''>
                </div>
                <div class='text'>
                    <span>
                        ".$v1['text']."
                    </span>
                </div>
            </div>
            <div class='annonce-card'>
                <div class='image'>
                    <img src='./images/".$v2['emplacement']."' alt=''>
                </div>
                <div class='text'>
                    ".$v2['text']."
                </div>
            </div>
        </div>";

}



/*
foreach($ar as $ann){

echo $ann['text']."<br>";
}
*/

?>
        
    </div>
    
</body>
</html>


