<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
<?php include_once 'header.php' ?>
    <div class="marge">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center"><h1>Ajout Produit</h1></div>
        </div>
    <?php
        $produits = array(
            array('blouse', 10, 100, 10*100),
            array('cil', 15, 200, 15*200),
            array('pinceau', 8, 100, 8*100),
            array('poudre', 9, 200, 9*200),
            array('ewoss', 20, 500, 20*500),
            array('crayon', 8, 100, 8*100),
            array('rougea', 12, 100, 12*100),
            array('lip', 24, 200, 24*200),
            array('jel', 40, 110, 40*110),
            array('taille', 5, 150, 5*150)
            );
    ?>



<div class="offset-md-3 col-12 col-md-6">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" required class="form-control" name="nom" id="nom" placeholder="Entrer le nom du produit">
                </div>
                <div class="form-group">
                    <label for="quantite">Quantité</label>
                    <input type="number" min=1 required class="form-control" name="quantite" id="quantite" placeholder="Entrer la quantité">
                </div>
                <div class="form-group">
                    <label for="prix">Prix Unitaire</label>
                    <input type="number" min=100 required class="form-control" name="prix" id="prix" placeholder="Entrer le prix unitaire">
                </div>
                <button type="submit" value="ajouter" name="ajouter" class="btn btn-primary">Ajouter</button>
            </form>
        </div>

    <?php
        
        if(empty($_POST['Ajouter'])){
            $ligne=10;
            $col=4;
            echo '<table  class="table table-striped table-hover"> 
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col"> Nom </th>
                            <th scope="col"> Quantite</th>
                            <th scope="col"> Prix Unitaire</th>
                            <th scope="col"> Montant</th>
                        <tr>
                    </thead>
                <tbody>
            ';
            for($i=0; $i<$ligne; $i++){
                $n=$i+1;
                if($produits[$i][1]<=10){
                    echo '<tr class="bg-danger"><th scope"row">'.$n. '</th>';
                    for($j=0; $j<$col; $j++){
                        echo '<td>' .$produits[$i][$j]. '</td>';
                    } 
                }
                else{
                    echo '<tr><th scope="row">' .$n. '</th>';
                    for($j=0; $j<$col; $j++){
                        echo '<td>' .$produits[$i][$j].' </td>';
                    }
                }
                echo '</tr>';
            }
            echo '</tbody>
                </table>';
        }
        else{
            $nom=$_POST['nom'];
            $qte=$_POST['quantite'];
            $prix=$_POST['prix'];
            $mtt=$qte=$prix;
            $ligne=10;
            $col=4;
            $t=false;
            for($i=0; $i<$ligne; $i++){
                if(strcasecmp($nom,$produits[$i][0])==0){
                    $t=true;
                }
            }
            if($t==true){
                echo 'ce nom existe deja';
            }
            else{
                $produits[]= array($nom, $qte, $prix, $mtt);
                $ligne++;
                echo '<table  class="table table-striped table-hover"> 
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col"> Nom </th>
                            <th scope="col"> Quantite</th>
                            <th scope="col"> Prix Unitaire</th>
                            <th scope="col"> Montant</th>
                        <tr>
                    </thead>
                <tbody>
            ';
            for($i=0; $i<$ligne; $i++){
                $n=$i+1;
                if($produits[$i][1]<10){
                    echo '<tr class="bg-danger"><th scope"row">'.$n. '</th>';
                    for($j=0; $j<$col; $j++){
                        echo '<td>' .$produits[$i][$j]. '</td>';
                    } 
                }
                else{
                    echo '<tr><th scope="row">' .$n. '</th>';
                    for($j=0; $j<$col; $j++){
                        echo '<td>' .$produits[$i][$j].' </td>';
                    }
                }
                echo '</tr>';
            }
            echo '</tbody>
                </table>';
            }
            
        }
    ?>
    </div>
        </div>
    <?php include_once 'footer.php' ?>
</body>
</html>