<?php include("acceuiladmin.php"); ?>

<br><br>

<div class="container">
  <div class="row justify-content-center">
    <div class="text-center">
      <h1><b> Nos Entraînements :</b></h1>
    </div>
  </div>

  <div class="col p-5 bg-info ">
    <br>

    <?php
    //Affichage des entraînements de la session admin
    foreach ($Listpresentation as $presentation) {
      echo


      "<div class='card ' style='width: 15rem; display : inline-block; '>
             <img class='card-img-top 'src='Images/" . $presentation->getphoto() . "'  alt='...'>
             <div class='card-body '>
               <h5 class='card-text'>" . $presentation->getnom() . "</h5>
               <p class='card-text'> " . $presentation->getcomment() . " </p>


               <button type='button' class='btn btn-outline-dark gap-10 col-9 ' data-bs-toggle='modal' data-bs-target='#exampleModal'>
                  Détails 
               </button>
 
       <div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
         <div class='modal-dialog'>
           <div class='modal-content'>
             <div class='modal-header'>
               <h5 class='modal-title text-center' id='exampleModalLabel'>" . $presentation->getnom() . "</h5>
               <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
             </div>
             <div class='modal-body'>
             " . $presentation->getdetails() . "
             </div>
             <div class='modal-footer '>
               <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Fermer</button>
             </div>
           </div>
           </div>
         </div> 
       </div>
           </div>";
    }

    ?>
  </div>
</div>


</body>