<?php include "Class Exo4.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Exo 4</title>
    <link rel='stylesheet' type='text/css' media='screen' href=''>
</head>
    <body>

<?php

    $perso1 = new user("Julien");
    $perso1->Personnage();
    $perso2 = new user("Bordrez");
    $perso2->Personnage();
    $perso2->Attaquer($perso1);
    $perso2->defense($perso1);
?>
    </body>
</head>