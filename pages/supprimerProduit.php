<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- css -->
    <title>Suppression de Produit</title>
</head>
<body>
    <?php include_once 'header.php' ?>
    <!-- Recherche de produits à partir du seuil -->
    <div class="container">
        <div class="row">
            <div class="col-12 text-center"><h1>Rechercher Produit à Supprimer</h1></div>
        </div>
        <div class="offset-md-3 col-12 col-md-6">
            <form class="form-inline my-2 my-lg-0" method="post" action="">
                <input class="form-control mr-sm-2" type="text" required name="nom" placeholder="Entrer la nom du produit à modifier">
                <button class="btn btn-outline-success my-2 my-sm-0" name="supprimer" type="submit" value="supprimer">Supprimer</button>
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
    if(empty($_POST['supprimer'])){
        
        //affichage
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
            
                if($produit[$i][1]<=10){
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
    else{
        $nom=$_POST['nom'];
        //recherche
        for($i=0;$i<$ligne;$i++){
            //$n=$i+1;
            if($nom==$produit[$i][0]){
                /*for($j=$i;$j<$ligne;$j++){
                    for($k=0;$k<$col;$k++){
                        $produit[$j][$k]=$produit[$j+1][$k];
                    }
                }*/
                array_splice($produit,$i,1);
                $ligne--;
            }
    }
    //affichage
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
    
        if($produit[$i][1]<=10){
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
?>
</div>
    <?php include_once 'footer.php' ?>
</body>
</html>