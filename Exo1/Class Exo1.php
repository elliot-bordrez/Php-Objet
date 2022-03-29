<?php
// Création d'une classe
class user
{
  private $Nom;
  private $Prenom;

  public function __construct($Nom, $Prenom)
  {
     $this->Nom = $Nom;
     $this->Prenom = $Prenom;
  }

  public function afficheUser()
  {
    echo "Je suis $this->Nom $this->Prenom";
  }
}