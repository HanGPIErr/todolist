<?php 
//on commence à utiliser les sessions
session_start();
// on supprime la sessions en cours
session_destroy();

//on redirige lutilisateur vers la page d'accueil

header('location:index.php');

include('header.php');

?>