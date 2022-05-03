<?php

//CONNEXION A LA BASE DE DONNEE
// $bdd = new PDO('mysql:host=localhost;dbname=dbdl', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$bdd = new PDO('mysql:host=db5007421313.hosting-data.io;dbname=dbs6115019', 'dbu2626575', '1story@dbdlan', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

//SESSION
session_start();

//CONSTANTE
// define("RACINE_SITE", $_SERVER['DOCUMENT_ROOT'] . '/PHP/10-ecommerce/');
define("RACINE_SITE", $_SERVER['DOCUMENT_ROOT'] . '/dbdlan');

// $_SERVER['DOCUMENT_ROOT'] --> E:/Install-xampp/htdocs
// echo RACINE_SITE . '<hr>'; // E:/Install-xampp/htdocs/PHP/10-ecommerce/

// Cette constante retourne le chemin physique du dossier 10-ecommerce sur le serveur lical xampp
// Lors de l'enregistrement d'une image.photo, nous aurons besoin du chemin physique complet vers le dossier photo sur le serveur pour enregistrer la photo dans le bon dossier sur le serveur.

define("URL", "http://dbdlan.battlefast.com");

// $image = URL . 'assets/photos/toto.jpg'
// echo '<img src="' . $image . '"alt="">'; ou echo"<img src='$image' alt''>";

// Cette constante servira a enregistré l'URL de l'image dans la BDD

// FAILLE XSS
foreach ($_POST as $key => $value)
    {
     $_POST[$key] = htmlspecialchars($value);
    }

// INCLUSION FICHIERS
// en incluant le fichier init.php, on inclut également le fichier fonction.php
require_once('fonction.php');
