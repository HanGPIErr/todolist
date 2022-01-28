<?php 
include('header.php');
if(isset($_POST['valider'])){

    $connexion = new PDO(
        "mysql:dbname=todolist;host=localhost:3306;charset=UTF8", 
        "root",
        ""
    );

    $requete = $connexion->prepare(
        'INSERT INTO tache (id, titre, contenu)
         VALUES (NULL,  ?, ?)'
    );
    
    $requete->execute([
        $_POST['titre'],
        $_POST['contenu']
    ]);
//redirection vers la page des tâches
    header('Location: liste.php');

}

?>

<form method="POST">

<div class="form-group">
  <label class="col-form-label mt-4" for="inputDefault">Titre</label>
  <input name="titre" type="text" class="form-control" placeholder="Default input" id="titre">
</div>

<div class="form-group">
      <label for="exampleTextarea" class="form-label mt-4">Contenu</label>
      <textarea name="contenu" class="form-control" id="contenu" rows="5"></textarea>
    </div>
<input class="btn btn-succes mt-3" type="submit" value="Ajouter la tâche" name="valider">
</form>

<?php 
include('footer.php');
?>