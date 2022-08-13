<?php
include("acceuiladmin.php");




?>

<br><br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <h2> Modifier </h2>
        </div>
    </div>
    <div class="col">
        <br>
        <?php
        //Affichage de la page modification
        foreach ($Listpresentation as $presentation) {
            echo
            "<form method='POST' action='index.php?uc=modifier&action=validemodif&modif=" . $presentation->getid() . "''>
            <div class='form-group'>
                <label for='formGroupExampleInput'>Nom du produit : </label>
                <input type='text' class='form-control' id='formGroupExampleInput' placeholder='nom de l'entrainement' name='nom' value='" . $presentation->getnom() . "'>
            </div>
            <div class='form-group'>
                <label for='formGroupExampleInput2'>La description de l'entrainement : </label>
                <input type='text' class='form-control' id='formGroupExampleInput2' placeholder='La description' name='comment' value='" . $presentation->getcomment() . "'>
                <label for='formGroupExampleInput2'>Les détails de l'entrainement : </label>
                <input type='text' class='form-control' id='formGroupExampleInput2' placeholder='Les détails' name='details' value='" . $presentation->getdetails() . "'>
                <label for='formGroupExampleInput2'>Image du produit : </label>
                <br>
                <input type='file' name='photo' placeholder='Selectionnez l'image'></textarea>
                <br><br>
                <button type='submit' class='btn btn-primary'>Enregistrer</button>

            </div></form>";
        }

        ?>

    </div>
</div>

</body>