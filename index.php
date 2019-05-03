<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- css -->

    <title>Connexion</title>
</head>
<body>
    <div class="container">
        <div class="row align-middle">
            <div class="offset-md-3 col-md-6">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="login">Login</label>
                        <input type="text" class="form-control" id="login" name="login" placeholder="Entrer votre login">
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Entrer votre mot de passe">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
                    </div>
                    <button type="submit" name="connexion" class="btn btn-primary">Connexion</button>
                </form>
                <?php
                $user=array(
                    array('ibrahima','ibou05003','passer123'),
                    array('awa','awa123','passer123'),
                    array('malick','milk','passer123'),
                    array('mareme','mareme','passer123'),
                    array('diamyl','diamyl','passer123'),
                    array('ablaye','ndoye','passer123')
                );
                $ligne=6;
                $col=3;
                //extract($_POST);
                if(isset($_POST['connexion'])){
                    $log=$_POST['login'];
                    $mdp=$_POST['password'];
                    //parcours
                    $trouve=false;
                    for($i=0;$i<$ligne;$i++){
                        //$n=$i+1;
                        if($log==$user[$i][1] && $mdp==$user[$i][2]){
                            $trouve=true;
                            header("location:pages/acceuil.php");
                        }
                    }
                    if($trouve==false)
                        echo "login ou passe incorrect";
                }
            ?>
            </div>
        </div>
    </div>
</body>
</html>