<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- css -->
    <title>Modification d'un Produit</title>
</head>
<body>
    <?php include_once 'header.php' ?>
    <!-- Recherche de produits à partir du seuil -->
    <div class="container">
        <div class="row">
            <div class="col-12 text-center"><h1>Modifier un Produit</h1></div>
        </div>
        <div class="offset-md-3 col-12 col-md-6">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" required class="form-control" name="nom" id="nom" placeholder="Entrer le nom du produit à modifier">
                </div>
                <div class="form-group">
                    <label for="quantite">Quantité</label>
                    <input type="number" min=1 required class="form-control" name="quantite" id="quantite" placeholder="Entrer la quantité">
                </div>
                <div class="form-group">
                    <label for="prix">Prix Unitaire</label>
                    <input type="number" min=100 required class="form-control" name="prix" id="prix" placeholder="Entrer le prix unitaire">
                </div>
                <button type="submit" value="modifier" name="modifier" class="btn btn-primary">Modifier</button>
            </form>
        </div>
    
    
    <?php
    //recherche
    $produit=array(
        array('lait',50,1000,50*1000),
        array('savon',25,500,25*500),
        array('sucre',9,300,300*9),
        array('datte',45,2300,45*2300),
        array('riz',100,9500,9500*100),
        array('jambon',75,1500,1500*75),
        array('merguez',50,1300,1300*50),
        array('oeuf',19,1700,1700*19),
        array('moutarde',50,600,600*50),
        array('cafe',10,3000,3000*10)
    );
    $ligne=10;
    $col=4;
    
    if(!empty($_POST['modifier'])){
        
            $nom=$_POST['nom'];
            $qte=$_POST['quantite'];
            $prix=$_POST['prix'];
            $montant=$qte*$prix;
            $trouve=false;
            for($i=0;$i<$ligne;$i++){
                $n=$i+1;
                if($nom==$produit[$i][0]){
                    $trouve=true;
                    $produit[$i]=array($nom,$qte,$prix,$montant);
                }
            }
        if($trouve==false){
            //affichage
                echo 'ce produit n\'existe pas';
        }
        else{
            echo '
            <div class="row">
            <div class="col-12 text-center"><h4>Liste Produits</h4></div>
            </div>
            ';
             echo '<table class="table table-striped table-hover">
                <thead class="thead-dark">
                <tr>
                    <th scope="col"> </th>
                    <th scope="col">Nom</th>
                    <th scope="col">Quantité</th>
                    <th scope="col">Prix Unitaire</th>
                    <th scope="col">Montant</th>
                <tr>
            </thead>
            <tbody>
            ';
            for($i=0;$i<$ligne;$i++){
                $n=$i+1;
                
                if($nom==$produit[$i][0]){
                    echo '<tr class="bg-success"><th scope="row">'.$n.'</th>';
                        for($j=0;$j<$col;$j++){
                            echo '<td>'.$produit[$i][$j].'</td>';
                        }
                }
                    else if($produit[$i][1]<=10){
                        echo '<tr class="bg-danger"><th scope="row">'.$n.'</th>';
                        for($j=0;$j<$col;$j++){
                            echo '<td>'.$produit[$i][$j].'</td>';
                        }
                    }
                    else{
                        echo '<tr><th scope="row">'.$n.'</th>';
                        for($j=0;$j<$col;$j++){
                            echo '<td>'.$produit[$i][$j].'</td>';
                        }
                    }
                
                echo '</tr>';
            }
            echo '</tbody></table>';
        }

    }
?>
</div>
    <?php include_once 'footer.php' ?>
</body>
</html>