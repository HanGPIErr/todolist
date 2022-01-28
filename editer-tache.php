<?php include('header.php'); 

$connexion = new PDO(
    "mysql:dbname=todolist;host=localhost:3306;charset=UTF8", 
    "root",
    ""
);

$requete = $connexion->prepare(
    'SELECT * FROM tache WHERE id = ?'
);

$requete->execute([
    $_GET['id']
]);

$tache = $requete->fetch();

?>

<form method="POST">

<div class="form-group">
  <label class="col-form-label mt-4" for="inputDefault">Titre</label>
  <input value="<?= $tache['titre'] ?>" name="titre" type="text" class="form-control" placeholder="Default input" id="titre">
</div>

<div class="form-group">
      <label for="exampleTextarea" class="form-label mt-4">Contenu</label>
      <textarea name="contenu" class="form-control" id="contenu" rows="5"><?= $tache['contenu'] ?></textarea>
    </div>
<input class="btn btn-succes mt-3" type="submit" value="Enregistrer" name="valider">
</form>


<?php include('footer.php'); ?>