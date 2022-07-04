<?php

// require_once('Classes/Banque/Compte.php');
// require_once('Classes/Banque/CompteCourant.php');
// require_once('Classes/Banque/CompteEpargne.php');
// require_once('Classes/Client/Compte.php');
require_once('Classes/Autoloader.php');

/*Utilisation d'un alias pour spécifier la classe qu'on veut utiliser*/

use App\Autoloader;
use App\Client\Compte as CompteClient;
use App\Banque\{Compte, CompteCourant, CompteEpargne};

Autoloader::register();
$compteClient = new CompteClient("Buffat", "Anthony", "Romans");
$compteCourant = new CompteCourant($compteClient, 1000, 250);

var_dump($compteCourant);

// $compteClient = new App\Client\Compte();

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
// var_dump($compteCourant, $compteEpargne);