<?php
include('navbarmembre.php');
include('./controllers/verif_email.php')
?>
<html>
<br><br>
<h4>Bienvenue dans la page de Contact</h4>
<br>


<!-- Display Error Message -->
<?php if (!empty($error)) : ?>
  <div class="alert alert-danger"><?php echo $error; ?></div>
<?php endif; ?>
<!-- Display Email Sent Confirmation -->
<?php if (isset($_SESSION['email_sent']) && $_SESSION['email_sent'] === true) : ?>
  <div class="alert alert-success">L'e-mail a été envoyé avec succès.</div>
  <?php unset($_SESSION['email_sent']); // Réinitialise la variable de session 
  ?>
<?php endif; ?>

<!-- Formulaire pour Contact -->

<body class="center-absolute">
  <form class="container mt-5" method="post">
    <div class="form-group">
      <input class="form-control" name="name" type="text" placeholder="Name" autocomplete="off" required />
    </div>
    <div class="form-group">
      <input class="form-control" name="email" type="email" placeholder="Email" autocomplete="off" required />
    </div>
    <div class="form-group">
      <input class="form-control" name="subject" type="text" placeholder="Subject" autocomplete="off" required />
    </div>
    <div class="form-group">
      <textarea class="form-control" name="message" placeholder="Message..." required></textarea>
    </div>
    <br>
    <button type="submit" name="send" class="btn btn-primary">
      Send <i class="fa-solid fa-paper-plane color-white ml-1"></i>
    </button>
  </form>
</body>

</html>