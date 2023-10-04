

<nav class="navbar navbar-expand-lg navbar-light bg-dark">
      <a class="navbar-brand" href="index.php?uc=admin&action=admin"> <img src="images/front.jpg" height="45"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#" style="color:white;">FitEddy <span class="sr-only">(current)</span></a>
          </li>

          <!-- Buton Administration -->
          <div class="toutdroite">
            <button type="button" class="shadow-lg btn btn-dark" data-toggle="modal" data-target="#exampleModal"style="color:black;background-color:white">
              Administration
            </button>


            <!-- Saisie des données-->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Administration</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form method="POST" action="model/verif_admin.php">

                      <label> Email : </label> <input type="text" placeholder="Votre  Identifiant" type="email" placeholder="Email" name="emailadmin">
                      <br>
                      <label> Mot De Passe : </label> <input type="password" placeholder="Mot de passe" name="mdpadmin">
                      <br>
                      <input type="submit" value="Valider" class='btn btn-dark'>
                    </form>
                  </div>
                </div>
              </div>
            </div>




            <!-- Buton Inscription -->


            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#Modal2" style="color:black;background-color:white">
              Inscription
            </button>

            <!-- Saisie des données -->
            <div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="Modal2" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Inscription</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form method="POST" action="model/verif_register.php">

                      <label> Email : </label> <input type="email" placeholder="Email" name="emailregister">
                      <br>
                      <label> Mot De Passe : </label> <input type="password" placeholder="Mot de passe" name="passwordregister">
                      <br>
                      <input type="submit" value="Valider" class='btn btn-dark'>
                    </form>
                  </div>
                </div>
              </div>
            </div>


            <!--- Bouton Membre -->


            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#mode" style="color:black;background-color:white">
              Membre
            </button>

            <!-- Saisie des données-->
            <div class="modal fade" id="mode" tabindex="-1" role="dialog" aria-labelledby="mode" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Membre</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form method="POST" action="model/verif_membre.php">

                      <label> Email : </label> <input type="text" placeholder="Votre  Identifiant" name="emailmembre">
                      <br>
                      <label> Mot De Passe : </label> <input type="password" placeholder="Votre  Mot De Passe" name="passwordmembre">
                      <br>
                      <input type="submit" value="Valider" class='btn btn-dark'>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>



        </ul>
      </div>
    </nav>