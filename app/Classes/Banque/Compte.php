<?php
namespace App\Banque;

/**
 * Classe correspondante à un compte bancaire /
 * Classe parente Compte
 */ 
abstract class Compte {

  /**
   * Titulaire du compte
   *
   * @var string
   */
  protected $titulaire;

  /**
   * Solde du compte
   *
   * @var float
   */
  protected $solde;


  /**
   * Constructeur de la classe Compte
   *
   * @param string $titulaire
   * @param float $solde
   */
  // C'est le constructeur de la classe ('Methode')
  public function __construct(string $titulaire, float $solde)
  {
    // On affect le titulaire à la propriété $titulaire
    $this->titulaire = $titulaire;

    // On affect le solde à la propriété $solde
    $this->solde = $solde;
  }


  /**
   * Transforme l'objet en chaine de caractère
   *
   * @return string
   */
  public function __toString()
  {
    return "Vous visualisez le compte de $this->titulaire, le solde est de {$this->solde} €";
  }


  /**
   * Voir le solde du Compte
   *
   * @return void
   */
  public function showSolde(){
    echo "Le solde du compte est de $this->solde €";
  }
  

  /**
   * Permet de retirer de l'argent sur le compte
   *
   * @param float $montant
   * @return void
   */
  public function retrait(float $montant){

    // On verifie s'il y a assez d'argent et que le montant n'est pas négatif
    if($montant > 0 && $this->solde >= $montant){
      $this->solde -= $montant;
    }else{
      echo "Montant invalide ou solde insuffisant";
    }
  }


  /**
   * Recuperer le nom du titulaire
   *
   * @return string
   */
  public function getTitulaire(): string {
    return $this->titulaire;
  }

  /**
   * Définit le nom d'un titulaire
   *
   * @param string $titulaire
   * @return self
   */
  public function setTitulaire(string $titulaire): self {
    $this->titulaire = $titulaire;
    return $this;
  }

    /**
   * Recuperer le solde
   *
   * @return string
   */
  public function getSolde(): float {
    return $this->solde;
  }

  /**
   * Définit le nom d'un titulaire
   *
   * @param string $titulaire
   * @return self
   */
  public function setSolde(float $solde): self {
    $this->solde = $solde;
    return $this;
  }
}

