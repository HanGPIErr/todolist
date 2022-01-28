<?php
session_start();

$erreurLogin = false;
// si l'utilisateur a validé le formulaire de connexion
if(isset($_POST['valider'])){

    $connexion = new PDO(
        "mysql:dbname=todolist;host=localhost:3306;charset=UTF8", 
        "root",
        ""
    );

   

    $requete = $connexion->prepare(
        'SELECT *
        FROM utilisateur
        WHERE pseudo = ?
    ');
    
    $requete->execute([
        $_POST['pseudo'],
    ]);
    
    $utilisateur = $requete->fetch();

if ($utilisateur) {

$motDePasseSaisi = $_POST['motDePasse'];
$motDePasseCrypte = $utilisateur['mot_de_passe'];
$motDePasseCompatible = password_verify($motDePasseSaisi, $motDePasseCrypte);
  
// si lutilisateur existe
    if ($motDePasseCompatible) {
      $_SESSION['pseudo'] = $_POST['pseudo'];
      header('location: liste.php');
    }else{
      $erreurLogin = true;
    }
    } else {
      $erreurLogin = true;
    }
  }

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>TO DO LIST</title>
</head>
<body>

<!-- Navbar -->

<nav class="navbar navbar-expand-lg navbar-dark bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="./assets/img/logocours.png" class="logo" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">

        <?php 
        // si lutilisateur est connecté
        if(isset($_SESSION['pseudo'])) {
            
        ?>

        <li class="nav-item">
          <a class="nav-link" href="deconnexion.php">Déconnexion</a>
        </li>

        <?php } ?>

      </ul>
      <form class="d-flex">
        <input class="form-control me-sm-2" type="text" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

