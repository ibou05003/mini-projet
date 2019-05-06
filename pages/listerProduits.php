<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <title>Document</title>
</head>
<body>
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

   
   
        <?php
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
        ?>
        



</body>
</html>