<?php include("navbaradmin.php") ?>
<br>
    <?php if(!empty($_GET['error'])): ?>
    <div class="alert alert-danger">Une erreur est survenue. Veuillez réessayer.</div>
<?php endif; ?>
<!-- Formulaire pour Ajouter-->
<h2> Ajouter un entraînement </h2>
<br>
<div class="container">
  <form method="POST" action="index.php?uc=ajouter&action=valideajouter" enctype="multipart/form-data" class="form-control-file">
    <div class="mb-10">
      <label for="exampleInputEmail1" class="form-label">Nom de l'entraînement</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nom de l'entraînement" name="nom">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Description</label>
      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Description de l'entraînement" name="comment">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Détails</label>
      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Détail de l'entraînement" name="details">
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Sujet">Images</label>
      </div>
      <div class="col-75">
        <input type="file" name="photo" placeholder="Selectionnez l'image"></textarea>
      </div>
    </div>
    <br>
    <button type="submit" class="btn btn-primary"> Ajouter</button>
    <a href="/index.php?uc=admin&action=admin" type="submit" class="btn btn-secondary"> Revenir en arrière</a>
  </form>
</div>