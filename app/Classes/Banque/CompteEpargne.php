<?php


class CompteEpargne extends App\Banque\Compte{
/**
* Taux d'intérêt pour le compte d'épargne
*
* @var float
*/
private $interets;
/**
* Constrtucteur de la classe compte épargne
*
* @param string $titulaire
* @param float $solde
* @param integer $taux
*/
public function __construct(string $titulaire, float $solde, int $taux)
{
 parent::__construct($titulaire, $solde);
 $this->interets = $taux;
}


/**
 * Permet le versement des interets
 *
 * @return void
 */
public function verserInterests(){
  if($this->solde > 0){
   $this->solde = $this->solde + ($this->solde * $this->interets / 100);
  }
}


/**
 * Get taux d'intérêt pour le compte d'épargne
 *
 * @return  float
 */ 
public function getInterets()
{
return $this->interets;
}

/**
 * Set taux d'intérêt pour le compte d'épargne
 *
 * @param  float  $interets  Taux d'intérêt pour le compte d'épargne
 *
 * @return  self
 */ 
public function setInterets(float $interets)
{
$this->interets = $interets;

return $this;
}


}