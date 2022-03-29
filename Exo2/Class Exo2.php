<?php
// Création classe Personnage
class user
{
  private $_Speudo;
  private $_Vie;

  public function __construct($Speudo, $Vie)
  {
     $this->_Speudo = $Speudo;
     $this->_Vie = $Vie;
  }

  public function Personnage()
  {
    echo "Mon nom est ".$this->_Speudo." et j'ai ".$this->_Vie." de vie";
  }
}