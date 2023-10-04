<!-- Navbar -->
<?php include("header.php"); ?>
<?php include("verifcheckmembre.php"); ?>

<sec id="haut">
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">
      <!-- Navbar des membres -->
      <a class="navbar-brand" href="index.php?uc=voir&action=list"> <img src="images/front.jpg" height="50"></a>

      <form class="d-flex" method="POST" action='index.php?uc=recherche&action=recherche'>
        <input class="form-control me-2" type="search" placeholder="Rechercher des entraînements" aria-label="Recherche" name="recherche">
        <input class="btn btn-success" type="submit" value="Rechercher">
      </form>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Maison
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Activité Sportif</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Musculation</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dehors
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Activité Sportif</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Musculation</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Salle de gym
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Activité Sportif</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Musculation</a></li>
            </ul>
          </li>
          <a class="nav-link active" aria-current="page" href="index.php?uc=voir&action=list" style="color:white">Voir les entraînements</a>
          <a class="nav-link active" aria-current="page" href="index.php" style="color:white">Revenir à la page d'acceuil</a>

        </ul>
      </div>

    </div>

  </nav>

  </body>