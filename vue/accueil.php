<body>

  <!-- Navbar -->
  <section id="haut">
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
      <a class="navbar-brand" href="index.php?uc=admin&action=admin"> <img src="images/front.jpg" height="45"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">FitEddy <span class="sr-only">(current)</span></a>
          </li>

          <!-- Buton Administration -->
          <div class="toutdroite">
            <button type="button" class="shadow-lg btn btn-dark" data-toggle="modal" data-target="#exampleModal">
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


            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#Modal2">
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


            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#mode">
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

































































    <br><br>
    <strong>
      <h2 style="font-family: FontName; ">FitEddy</h2>
    </strong>

  </section>


  <strong>
    <div class="presentation">

      Quelle est la différence entre activité sportive et activité physique ?
      <br><br>
  </strong>


  Sport, exercice physique, remise en forme, sport santé... De nombreux termes existent autour de l’activité physique et soyons honnête, il est parfois compliqué de s’y retrouver.
  <br><br>
  L’OMS (Organisation Mondiale de la santé) définit l’activité physique comme telle : "l’activité physique désigne tout mouvement corporel produit par les muscles squelettiques, entraînant une dépense d’énergie supérieure à celle du repos".
  <br>
  Autrement dit, tous les mouvements du corps sollicitant vos muscles.

  </div>
  </div>

  <div id="carouselExampleControls" class="carousel slide img-thumbnail bg-info" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/presentation1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item ">
        <img src="images/presentation2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/presentation3.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <br><br><br>
  <strong>

    <div class="presentation">
      <h3> Pourquoi créer un site pour votre salle de sport ou votre club de sport ? </h3>
  </strong>
  <br><br><br>
  Le secteur des clubs de sport ou salles de sport est en pleine expansion, se faire connaitre, se distinguer des autres clubs sportifs est indispensable.
  <br>
  C’est pourquoi créer son site Internet pour sa salle de sport ou son club de sport est devenu incontournable.
  <br><br>
  L’objectif est de présenter vos atouts et avantages de se rendre dans club de sport.
  <br>
  Mettez en valeur vos équipes, les différents sports à pratiquer et vos offres. Créer son site pour son club sportif est un excellent moyen de communiquer à faible coût et d’offrir tout un panel de service en ligne pour vos clients.
  <br><br><br>
  Que ce soit une salle de sport, fitness, musculation, squash, football, basket-ball, judo de nombreuses fonctionnalités vous sont ouvertes pour mettre à disposition des documents à télécharger (documents d’inscription, fiche des entraînements, etc…), de faire partager en photos par exemple les dernières coupes de votre club de sport, de diffuser de l’information via des newsletters sans oublier d’afficher l’agenda de votre club de sport. Créer votre site en quelques minutes, gratuitement dans un premier temps puis évoluer si c’est utile vers la version Pro pour encore plus de fonctionnalités.
  </div>



  <br><br>
  <p class="aligncenter bg-info">
    <img src="imges/acceuil.jpg" class="img-thumbnail bg-dark">
  </p>