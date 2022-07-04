<?php

namespace App\Client;


/**
 * Classe compte client
 */
class Compte {
  /**
   * @var string
   * enom du compte
   */
  private $nom;
  /**
   * @var string
   * Prenom du compte
   */
  private $prenom;
  /**
   * @var string
   * ville du compte
   */
  private $ville;

  /**
   * Constucteur de la classe CompteClients
   * @param string $nom
   * @param string $prenom
   * @param string $ville
   * 
   */
  public function __construct(string $nom, string $prenom, string $ville )
  {
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->ville = $ville;
  }

  /**
   * Get enom du compte
   *
   * @return  string
   */ 
  public function getNom()
  {
    return $this->nom;
  }

  /**
   * Set enom du compte
   *
   * @param  string  $nom  enom du compte
   *
   * @return  self
   */ 
  public function setNom(string $nom)
  {
    $this->nom = $nom;

    return $this;
  }

  /**
   * Get prenom du compte
   *
   * @return  string
   */ 
  public function getPrenom()
  {
    return $this->prenom;
  }

  /**
   * Set prenom du compte
   *
   * @param  string  $prenom  Prenom du compte
   *
   * @return  self
   */ 
  public function setPrenom(string $prenom)
  {
    $this->prenom = $prenom;

    return $this;
  }

  /**
   * Get ville du compte
   *
   * @return  string
   */ 
  public function getVille()
  {
    return $this->ville;
  }

  /**
   * Set ville du compte
   *
   * @param  string  $ville  ville du compte
   *
   * @return  self
   */ 
  public function setVille(string $ville)
  {
    $this->ville = $ville;

    return $this;
  }
}