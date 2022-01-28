<?php 
include('header.php');


$erreurConfirmerMotDePasse = false;
$erreurMotDePasseTropCourt = false;

// si lutilisateur à valider le formulaire
if(isset($_POST['valider'])) {
        // si le mdp fait moins de 5 characters
        if(strlen($_POST['motDePasse']) < 5) {
            $erreurMotDePasseTropCourt = true;
            // sinon si les mdp sont identiques
        } else if($_POST['motDePasse'] == $_POST['confirmerMotDePasse']) {

    

    $connexion = new PDO(
        "mysql:dbname=todolist;host=localhost:3306;charset=UTF8", 
        "root",
        ""
    );

    $requete = $connexion->prepare(
        'INSERT INTO utilisateur (id, pseudo, mot_de_passe)
         VALUES (NULL,  ?, ?)'
    );
    
    $requete->execute([
        $_POST['pseudo'],
        password_hash($_POST['motDePasse'], PASSWORD_BCRYPT)
    ]);
//redirection vers la page d'accueil
    header('Location: index.php');
    } else {
        $erreurConfirmerMotDePasse = true;
    }
}
?>

<div class="col d-flex justify-content-center">
<form method="POST">

        <div class="form-group">
        <label class="col-form-label col-form-label-lg mt-4" for="pseudo">Pseudo</label>
        <input value="<?php if(isset($_POST["pseudo"])) echo $_POST["pseudo"] ?>" name="pseudo" class="form-control form-control-lg" type="text" placeholder="Ex : Toto" id="inputLarge">
        </div>

        <div class="form-group <?php if($erreurMotDePasseTropCourt) echo "has-danger" ?>">
        <label class="col-form-label col-form-label-lg mt-4" for="Mot De Passe">Mot De Passe</label>
        <input name="motDePasse" class="form-control form-control-lg <?php if($erreurMotDePasseTropCourt) echo 'is-invalid' ?>" type="password" placeholder="Votre mot de passe" id="inputLarge">
        <?php
        if ($erreurMotDePasseTropCourt) {
            ?>
            <div class="invalid-feedback">Le mot de passe doit avoir au minimum 5 caractères</div>
        <?php
        }
        ?>
        </div>

        <div class="form-group <?php if($erreurConfirmerMotDePasse) echo "has-danger" ?>">
        <label class="col-form-label col-form-label-lg mt-4" for="Confirmer Mot De Passe">Confirmer Mot De Passe</label>
        <input name="confirmerMotDePasse" class="form-control form-control-lg <?php if($erreurConfirmerMotDePasse) echo 'is-invalid' ?>" type="password" placeholder="Confirmer Mot De Passe" id="Confirmer Mot De Passe">
        <?php
            if($erreurConfirmerMotDePasse) {
                ?>
                    <div class="invalid-feedback">Les mots de passe ne correspondent pas</div>
                <?php
            }
        ?>
        </div>
      <!--   <div class="form-group has-danger">
  <label class="form-label mt-4" for="inputInvalid">Invalid input</label>
  <input type="text" value="wrong value" class="form-control is-invalid" id="inputInvalid">
  
</div> -->

        <input class="btn btn-success mt-4" type="submit" value="Valider" name="valider">
    </div>

</form>
</div>



<?php
include('footer.php');
?>