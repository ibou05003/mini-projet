<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- css -->
    <title>Recherche des Produits</title>
</head>
<body>
    <?php include_once 'header.php' ?>
    <!-- Recherche de produits à partir du seuil -->
    <div class="container">
        <div class="row">
            <div class="col-12 text-center"><h1>Rechercher Produits</h1></div>
        </div>
        <div class="offset-md-1 col-12 col-md-10">
            <form class="form-inline my-2 my-lg-0" method="post" action="">
                <input class="form-control mr-sm-2" type="number" min=1 name="seuil" placeholder="Entrer la quantité seuil">
                <input class="form-control mr-sm-2" type="number" min=100 name="pmin" placeholder="Entrer le prix min">
                <input class="form-control mr-sm-2" type="number" min=100 name="pmax" placeholder="Entrer le prix max">
                <button class="btn btn-outline-success my-2 my-sm-0" name="rechercher" type="submit" value="rechercher">Rechercher</button>
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
    if(empty($_POST['rechercher'])){
        //$seuil=$_POST['seuil'];
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
        //si c'est la quantite qui est saisie et non les prix
        if(!empty($_POST['seuil']) && empty($_POST['pmin']) && empty($_POST['pmax'])){
            $seuil=$_POST['seuil'];
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
            if($seuil<=$produit[$i][1]){
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
            }
            echo '</tr>';
        }
        echo '</tbody></table>';
        }
        elseif(empty($_POST['seuil']) && !empty($_POST['pmin']) && empty($_POST['pmax'])){
            $pmin=$_POST['pmin'];
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
            if($pmin<=$produit[$i][2]){
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
            }
            echo '</tr>';
        }
        echo '</tbody></table>';
        }
        elseif(empty($_POST['seuil']) && empty($_POST['pmin']) && !empty($_POST['pmax'])){
            $pmax=$_POST['pmax'];
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
            if($pmax>=$produit[$i][2]){
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
            }
            echo '</tr>';
        }
        echo '</tbody></table>';
        }
        elseif(empty($_POST['seuil']) && !empty($_POST['pmin']) && !empty($_POST['pmax'])){
            //l'utilisateur saisi le pmin et le pmax
            $pmin=$_POST['pmin'];
            $pmax=$_POST['pmax'];
            if($pmin<$pmax){
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
        if($pmin<=$produit[$i][2] && $pmax>=$produit[$i][2]){
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
        }
        echo '</tr>';
    }
    echo '</tbody></table>';
            }
            else{
                echo 'le prix minimum ne doit pas etre  superieur au prix max';
            }
        }
        elseif(!empty($_POST['seuil']) && !empty($_POST['pmin']) && !empty($_POST['pmax'])){
            //l'utilisateur saisi toutes les valeurs
            $seuil=$_POST['seuil'];
            $pmin=$_POST['pmin'];
            $pmax=$_POST['pmax'];
            if($pmin<$pmax){
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
        if($seuil<=$produit[$i][1] && $pmin<=$produit[$i][2] && $pmax>=$produit[$i][2]){
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
        }
        echo '</tr>';
    }
    echo '</tbody></table>';
            }
            else{
                echo 'le prix minimum ne doit pas etre  superieur au prix max';
            }
        }
        elseif(!empty($_POST['seuil']) && !empty($_POST['pmin']) && empty($_POST['pmax'])){
            //l'utilisateur saisi toutes les valeurs
            $seuil=$_POST['seuil'];
            $pmin=$_POST['pmin'];
            
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
        if($seuil<=$produit[$i][1] && $pmin<=$produit[$i][2]){
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
        }
        echo '</tr>';
    }
    echo '</tbody></table>';
            
        }
        elseif(empty($_POST['seuil']) && empty($_POST['pmin']) && empty($_POST['pmax'])){
            echo 'vous n\'avez selectionné aucun critere de recherche';
        }
        else{
            $seuil=$_POST['seuil'];
            $pmax=$_POST['pmax'];
            
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
        if($seuil<=$produit[$i][1] && $pmax>=$produit[$i][2]){
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