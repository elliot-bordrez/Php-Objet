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
}