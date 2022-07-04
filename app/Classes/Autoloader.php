<?php

namespace App;


/**
 * Classe Autoloader pour chargement automatique des fichiers
 */
class Autoloader {


  static function register(){
    spl_autoload_register([
      __CLASS__, 'autoload'
    ]);
  }

  static function autoload($class){
  var_dump($class);
    // On retire App
    $class = str_replace(__NAMESPACE__ . '\\', '', $class);

    var_dump($class);

    // On remplace les  par les /

    $class = str_replace('\\', '/', $class);

    var_dump($class);

    $fichier = __DIR__ . '/' . $class . '.php';

    var_dump($fichier);

    // On verifie si le fichier existe

    if (file_exists($fichier)) {
      // On require_once le fichier
      require_once $fichier;
    } 
    

  }
}