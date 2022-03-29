<?php include ("User_DTL.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Exo DTL</title>
    <link rel='stylesheet' type='text/css' media='screen' href='Exo_DTL.css'>
</head>
<body>
    <!-- Création du formulaire de connexion -->
    <div id="container">
    <form action="" method="post">
        <h1>Connexion</h1>
        <label><b>Nom d'utilisateur</b></label>
        <input type="text" placeholder="Entrer le nom d'utilisateur" name="login" id="login" required>

        <label><b>Mot de passe</b></label>
        <input type="password" placeholder="Entrer le mot de passe" name="mdp" id="password" required>

        <input type="submit" value="Valider" name="Valider" >
    </div>
    </form>

    <?php
$Tableau = array();
try {
    
    $bdd = new PDO('mysql:host=localhost;dbname=exofinal', 'root', 'root');
    $req = "SELECT * from User";
    $reponses = $bdd->query($req);
    while ($donnees = $reponses->fetch())
    {
        array_push($TableauUser,new User($donnees['id'],$donnees['login'],$donnees['mdp']));
    } 

} catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage(), "\n";
}


if(isset($_POST["Valider"])){

   //1) rechercher le bon user dans $TableauUser
    $trouve = false;
    foreach ($TableauUser as  $TheUser) {
        //si le user du formulaire = le nom d'un user dans la liste alors on vérifi mdp
        if($TheUser->getNom()==$_POST['login']){
            $trouve = true;
            //2) Vérifier le mdp
            //on va vérifier le mdp du formulaire avec celui de user trouvé
            if($TheUser->seConnecter($_POST['mdp'])){
                ?>
                <h2>Vous etes connecté</h2>
                <?php
            }else{
                ?>
                <h2>Mauvais Mot de passe</h2>
                <?php
            }
        }
    }
    if(!$trouve){
        echo "User Inconnu vérifier othographe";
    }
}
?>
</h1>
</body>
</html>