<?php

require_once('Classes/Banque/Compte.php');
require_once('Classes/Banque/CompteCourant.php');
require_once('Classes/Banque/CompteEpargne.php');
require_once('Classes/Client/Compte.php');

$compteClient = new App\Client\Compte();

use App\Client\Compte as CompteClient;
// $compteCourant = new CompteCourant('Paul', 1000, 500);
// $compteCourant->retrait(1400);
// $compteCourant->showSolde();
// $compteCourant->retrait(1700);

// $compteEpargne = new CompteEpargne('Pierre', 1000, 10);
// $compteEpargne->verserInterests();

// Premiere instance de la classe Compte
// $compte = new Compte('Pomme', 10000);

// // echo $compte->getTitulaire();

// // $compte->setTitulaire("Paul");

// // echo '<br/>'.$compte->getSolde();

// // $compte->setSolde(500);

// echo '<br/>'.$compte;

/* -> = va chercher dans la classe */
// $compte->showSolde();
// echo "<br/>";
// $compte->retrait(100000);
// echo "<br/>";
// $compte->showSolde();

// $compte->titulaire =  "Bouboule";
// $compte->solde = 1000;
// Deuxieme instance de la classe Compte
// $compte1 = new Compte();
var_dump($compteCourant, $compteEpargne);