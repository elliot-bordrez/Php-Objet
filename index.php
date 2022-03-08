<?php include ("user.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php echo"Test de la page";?>
        
        <form action="" method="Post">
            Login<input type="text" name="login">
            mdp<input type="text" name="mdp">
            <input type="submit" name="connexion" value="ok">
        </form>
    <?php
     
$U1 = new User("User1","1234");
$U2 = new User("User2","abcd");
$U3 = new User("User3","2345");
$U4 = new User("User4","34567");
$U5 = new User("User5","abcd");

$TableauUser = array();

array_push($TableauUser,$U1);
array_push($TableauUser,$U2);
array_push($TableauUser,$U3);
array_push($TableauUser,$U4);
array_push($TableauUser,$U5);

if(isset($_POST["connexion"])){

   //1) rechercher le bon user dans $TableauUser
    $trouve = false;
    foreach ($TableauUser as  $TheUser) {
        //si le user du formulaire = le nom d'un user dans la liste alors on vérifi mdp
        if($TheUser->getNom()==$_POST['login']){
            $trouve = true;
            //on va vérifier le mdp du formulaire avec celui de user trouvé
            if($TheUser->seConnecter($_POST['mdp'])){
                ?>
                <h2>Vous etes connect</h2>
                <?php
            }else{
                ?>
                <h2>Mauvais Mot de passe</h2>
                <?php
            }
        }
    }
    if(!$trouve){
        echo "User Inconnu vérifier orthographe";
    }

   //2) Vérifier le mdp


}
    
?>
    </h1>
</body>
</html>