<?php

// Nous créons une classe « Personnage ».
utilisateur de classe
{
    public  $ basenom ;

   fonction  publique __construct ( $ id )
  {
    $ MaBase = nouveau  PDO ( 'mysql:host=192.168.65.198; dbname=Exo5; charset=utf8' , 'elliot' , 'elliot' );
    $ this -> basenom = $ MaBase -> query ( "SELECT * FROM `personnage` WHERE `idperso` = $id" )-> fetch ();

  }

   Fonction  publique Personnage ()
  {
    echo  "Le personnage" . $ this -> basenom [ 'nom' ]. " un " . $ this -> basenom [ 'vie' ]. " de vie<p></p>" ;
  }

}