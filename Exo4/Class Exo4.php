<?php
// Création classe Personnage
class user
{
  private $_Speudo;
  private $_Vie = 100;

  public function __construct($Speudo)
  {
     $this->_Speudo = $Speudo;
  }

  public function Personnage()
  {
    echo "Mon nom est ".$this->_Speudo." et j'ai ".$this->_Vie." de vie";
  }

  public function Attaquer($target)
  {

    echo "<p>".$this->_Speudo." attaque ".$target->_Speudo."</p>";
    $target->_Vie = $target->_Vie - 50;
    echo "<p>".$target->_Speudo." a pris 50 de dégat </p>";
  }


  public function defense($deff)
  {
    
    echo "<p>".$deff->_Speudo." riposte </p>";
    $this->_Vie = $this->_Vie - 50;
    echo"<p>Bordrez a maintenant ".$this->_Vie."</p>";

  }
}