<?php 

include('header.php');

if(!isset($_SESSION['pseudo'])) {
    header('Location: index.php'); 
}

$connexion = new PDO(
    "mysql:dbname=todolist;host=localhost:3306;charset=UTF8", 
    "root",
    ""
);

$requete = $connexion->prepare(
    'SELECT *
    FROM tache
    
');

$requete->execute();

$listeTaches = $requete->fetchAll();

?>
    <a href="ajouter-tache.php" class="btn btn-success">Ajouter une tâche</a>
    <div class="row">

<?php
foreach($listeTaches as $tache) {
?>


        <div class="col-3 mt-5 mx-auto">
            <div class="card border-info mb-3">
                <div class="card-header">
                    <a href="editer-tache.php?id=<?=$tache['id'] ?>" class="btn btn-info"><ion-icon name="pencil-outline"></ion-icon></a>
                    <a href="supprimer-tache.php?id=<?=$tache['id'] ?>" class="btn btn-danger"><ion-icon name="trash-outline"></ion-icon></a>
                </div>
                    <div class="card-body">
                        <h4 class="card-title"><?=$tache['titre'] ?></h4>
                        <p class="card-text"><?=$tache['contenu'] ?></p>
                    </div>
                 
            </div>
        </div>
    
<?php } ?>

</div>

<?php 
include('footer.php');
?>