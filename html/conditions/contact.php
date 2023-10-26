<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="../ads/style.css">
    <title>DzAnnonce - Contact</title>
</head>
<body>
    <nav>
        <div class="titre">
            <h1>DzAnnonce</h1>
        </div>
        <ul>
        
        <li><a href="../ads/ads.php">Home</a></li>
            <?php
            session_start();
	if(isset($_SESSION['information'])) 
	         echo '<li><a href="../ads/dashboard17381738.php">Dashboard</a></li>';
        
        ?>
            <li><a href="#" class="active">Contact</a></li>
        
        </ul>
    </nav>
    <div class="main">
        <div class="container">
            <div class="container2">
                <h1>Pourquoi choisir DzAnnonce ?</h1>
                <div class="text">
                    Avec notre site, vous bénéficiez d'un service de haute qualité pour publier vos annonces légales !
                    Vous pouvez obtenir votre attestation de parution par email en quelques minutes.
                    Pour publier, il vous suffit de choisir le formulaire adapté à votre annonce légale et de le compléter.
                    Après le paiement, votre annonce sera relue par notre équipe et vous recevrez votre attestation de parution par email en quelques minutes !
                </div>
            </div>
            <div class="container1">
                <h1>Contactez nous</h1>
                <div class="text">
                    Pour mettre votre annonce sur notre site, il vous suffit de télécharger ce <a href="./conditions.php?filename=condEtudiant" download>formulaire</a> de contact, le remplir puis nous l'envoyer via notre email <span style="font-weight: bold;">contact@dzannonce.com</span> et attendre notre réponse.<br/>
                    Vous trouverez peut-être une réponse à votre question sur notre <a href="#">Foire Aux Questions</a>.
                </div>
            </div>
        </div>


        
    </div>
</body>
</html>
