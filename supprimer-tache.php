SUPPRESSION DE LA TACHE
<?php

$connexion = new PDO(
    "mysql:dbname=todolist;host=localhost:3306;charset=UTF8", 
    "root",
    ""
);

$requete = $connexion->prepare(
    'DELETE FROM tache WHERE id = ?'
);

$requete->execute([
    $_GET['id']
]);
//redirection vers la page des tâches
header('Location: liste.php');




?>