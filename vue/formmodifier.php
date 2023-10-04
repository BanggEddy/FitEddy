<?php include("acceuiladmin.php");?>
<br><br>
<?php if (!empty($_GET['error'])) : ?>
        <p class="" style="color: red;">Une erreur est survenue. Veuillez réessayer.</p>
<?php endif; ?>
<br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <h2> Modifier </h2>
        </div>
    </div>
    <div class="col">
        <br>
        <?php
foreach ($Listpresentation as $presentation) {
    echo
    "<form method='POST' action='index.php?uc=modifier&action=validemodif&modif=" . $presentation->getid() . "'' enctype='multipart/form-data'>
    <div class='form-group'>
        <label for='formGroupExampleInput'>Nom du produit : </label>
        <input type='text' class='form-control' id='formGroupExampleInput' placeholder='nom de l'entrainement' name='nom' value='" . $presentation->getnom() . "'>
    </div>
    <div class='form-group'>
        <label for='formGroupExampleInput2'>La description de l'entrainement : </label>
        <br>
        <input type='text' class='form-control' id='formGroupExampleInput2' placeholder='La description' name='comment' value='" . $presentation->getcomment() . "'>
        <br>
        <label for='formGroupExampleInput2'>Les détails de l'entrainement : </label>
        <br>
        <input type='text' class='form-control' id='formGroupExampleInput2' placeholder='Les détails' name='details' value='" . $presentation->getdetails() . "'>
        <br>
        <label for='formGroupExampleInput2'>Image du produit : </label>
        <br>
        <br>
        <input type='file' name='photo' name='".$presentation->getphoto()."'>
        <br><br>
        <button type='submit' class='btn btn-primary'>Enregistrer</button>
        <a href='index.php?uc=modifier&action=modifier' type='submit' class='btn btn-secondary'> Retour </a>
    </div>
    </form>";
}


        ?>

    </div>
</div>

</body>