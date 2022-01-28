<?php 

include('header.php');
?>

<div class="container">

<?php

if($erreurLogin) {
    ?>


<div class="alert alert-dismissible alert-warning">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <h4 class="alert-heading">Attention!</h4>
  <p class="mb-0">Vous vous êtes trompé de mot de passe, veuillez recommencer votre connexion.</a>.</p>
</div>


<?php
}
?>

<div class="col d-flex justify-content-center mx-auto" style="width: auto;">
<form method="POST">

    <div class="form-group">
        <label class="col-form-label col-form-label-lg mt-4" for="inputLarge">Pseudo</label>
        <input value="<?php if(isset($_POST["pseudo"])) echo $_POST["pseudo"] ?>" name="pseudo" class="form-control form-control-lg" type="text" placeholder="Ex : Toto" id="inputLarge">
        </div>
        <div class="form-group">
        <label class="col-form-label col-form-label-lg mt-4" for="inputLarge">Mot De Passe</label>
        <input name="motDePasse" class="form-control form-control-lg" type="password" placeholder="Votre mot de passe" id="inputLarge">
        </div>
        <div class="col d-flex justify-content-center " style="width: auto;"> 
        <input class="btn btn-success mt-4" type="submit" value="Se Connecter" name="valider">
        </div>
    </div>
</form>
<div class="col d-flex justify-content-center " style="width: auto;">        
<a href="inscription.php"><button type="button" class="btn btn-success mt-4 ">S'inscrire</button></a>
</div>     
</div>



<!-- Card -->
<div class="container mt-5">
<div class="row">
<div class="col col-lg-4 col-md-6 col-sm-12 mt-5 mx-auto" style="width: auto;">
<div class="card border-info mb-3" style="max-width: 20rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h4 class="card-title">Info card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
<div class="col col-lg-4 col-md-6 col-sm-12 mt-5 mx-auto" style="width: auto;">
<div class="card border-info mb-3" style="max-width: 20rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h4 class="card-title">Info card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
<div class="col col-lg-4 col-md-6 col-sm-12 mt-5 mx-auto" style="width: auto;">
<div class="card border-info mb-3" style="max-width: 20rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h4 class="card-title">Info card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
<div class="col col-lg-4 col-md-6 col-sm-12 mt-5 mx-auto" style="width: auto;">
<div class="card border-info mb-3" style="max-width: 20rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h4 class="card-title">Info card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
<div class="col col-lg-4 col-md-6 col-sm-12 mt-5 mx-auto" style="width: auto;">
<div class="card border-info mb-3" style="max-width: 20rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h4 class="card-title">Info card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 mt-5 mx-auto" style="width: auto;">
<div class="card border-info mb-3" style="max-width: 20rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h4 class="card-title">Info card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>

</div>
</div>

<?php 
include('footer.php');
?>