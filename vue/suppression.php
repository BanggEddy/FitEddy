<?php include("acceuiladmin.php");?>
<br><br>

<div class="container">
<div class="row justify-content-center">
    <div class="col"> <h2> Suppression </h2></div>
</div>
   <div class="col">
   <br> 
  <?php
       //Affichage de la page modification
      foreach($Listpresentation as $presentation) 
      {
       echo "
      
       <!-- Cards -->
       <div class='card text-center' style='width: 15rem; display : inline-block'>
             <img class='card-img-top'src='Images/".$presentation->getphoto() ."'  alt='...'>
             <div class='card-body'>
               <h5 class='card-text'>".$presentation->getnom() ."</h5>
               <p class='card-text'> " .$presentation->getcomment() ." </p>
             
            
              
               <!-- Button -->
               <a class='btn btn-dark' type='button'href='index.php?uc=suppression&action=validesupp&supp=".$presentation->getid(). "'> Supprimer <i class='far fa-edit fa-2x'></i></a>

       
       </div>
           </div>";
          }
           
           
           
           
           
           
           
           
           
           
     ?>
    
    </div>
</div>

</body>