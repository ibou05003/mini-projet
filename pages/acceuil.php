<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>ACCUEIL</title>
</head>
<body>

<?php
include 'header.php';
?>
    <div class="container-fluid us">
        <div class="row">
            <div class="col-md-4">
                <a href="accueil.php">ACCUEIL</a>
            </div>
            <div class="col-md-8">
                <ul class="row">
                    <li class="col-md-2"><a href="connexion.php">Connexion</a></li>
                    <li class="col-md-2"><a href="listerProduits.php">Lister Produit</a></li>
                    <li class="col-md-2"><a href="recherchreProduits.php">Rechercher Produit</a></li>
                    <li class="col-md-2"><a href="ajouterProduit.php">Ajouter Produit</a></li>
                    <li class="col-md-2"><a href="updateProduit.php">Update Produit</a></li>
                    <li class="col-md-2"><a href="supprimerProduits.php">Supprimer Produit</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 ou"><a href="connexion.php"><center>CONNEXION </center> </a></div>
            <div class="col-md-3 ou"> <a href="listerProduits.php"><center>LISTER PRODUIT</center> </a></div>
            <div class="col-md-3 ou"><a href="recherchreProduits.php"><center> RECHERCHER PRODUIT </center></a></div>
        </div>
    </div>

    <div class="container-fluid">
            <div class="row">
            <div class="col-md-3 ou"><a href="ajouterProduit.php"><center>  AJOUTER PRODUIT</center></a></div>
            <div class="col-md-3 ou"><a href="updateProduits.php"><center>  UPDATE PRODUIT</center></a></div>
            <div class="col-md-3 ou"><a href="supprimerProduits.php"><center>  SUPPRIMER PRODUIT</center></a></div>
            </div>
    </div>


    <div class="container-fluid us">
        <div class="row">
            <div class="col-md-12"><center> Copyright MONNAWA IBOUCHOU | TOUS DROITS RÉSERVÉS</center></div> </div>
    </div>
  
</body>
</html>