<?php
//--------- Base de donnée
//$mysqli = new mysqli($_ENV[''],$_ENV[''],$_ENV[''],$_ENV['']);
//if ($mysqli->connect_error) die('Un problème est survenu lors de la tentative de connexion à la BDD : ' . $mysqli->connect_error);
// $mysqli->set_charset("utf8");
 
//--------- SESSION
session_start();
 
//--------- CHEMIN
// print_r($_SERVER);
define("RACINE_SITE","http://" . $_SERVER['HTTP_HOST'] . "/");
$contenu = '';
require('./inc/function.inc.php');
 
