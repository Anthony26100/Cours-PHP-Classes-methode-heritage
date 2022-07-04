<?php

namespace App\Banque;

use App\Client\Compte as CompteClient;

class CompteCourant extends Compte{


  /**
   * Découvert autorisé
   *
   * @var int
   */
  private $decouvert;


  /**
* Constructeur de la classe CompteCourant
*
* @param CompteClient $titulaire
* @param float $solde
* @param integer $decouvert
*/
public function __construct(CompteClient $titulaire, float $solde, int $decouvert = 250) 
{
 // On doit appeler le constructeur de la classe parente pour lui passer les propriétés de base
 parent::__construct($titulaire, $solde);
 
 // On définit la propriétés découvert
 $this->decouvert = $decouvert;
}

public function retrait(float $montant)
{
  // On verifie si le découvert permet le retrait
  if ($this->solde - $montant > -$this->decouvert && $montant > 0) {
    $this->solde -= $montant;
  }else{
    echo 'Solde insuffisant';
  }
}


  /**
   * Get découvert autorisé
   *
   * @return  int
   */ 
  public function getDecouvert()
  {
    return $this->decouvert;
  }

  /**
   * Set découvert autorisé
   *
   * @param  int  $decouvert  Découvert autorisé
   *
   * @return  self
   */ 
  public function setDecouvert(int $decouvert)
  {
    $this->decouvert = $decouvert;

    return $this;
  }
}