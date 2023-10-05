<?php
include('navbarmembre.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './phpmailer/src/Exception.php';
require './phpmailer/src/PHPMailer.php';
require './phpmailer/src/SMTP.php';

$error = ""; // Initialize an error variable

if(isset($_POST['send'])){
    $name = htmlentities($_POST['name']);
    $email = htmlentities($_POST['email']);
    $subject = htmlentities($_POST['subject']);
    $message = htmlentities($_POST['message']);

    // Add your email validation logic here
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format. Please enter a valid email address.";
    } else {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'li.david.pro@gmail.com';
        $mail->Password = 'byylwhwycxcsyixu';
        $mail->Port = 465;
        $mail->SMTPSecure = 'ssl';
        $mail->isHTML(true);
        $mail->setFrom($email, $name);
        $mail->addAddress('li.david.pro@gmail.com');
        $mail->Subject = ("$email ($subject)");
        $mail->Body = $message;
        $mail->send();

        header("Location: ./index.php?uc=contact");
    }
}
?>
<html>
<br><br>
<h4>Bienvenue dans la page de Contact</h4>
<br>


<!-- Display Error Message -->
<?php if(!empty($error)): ?>
    <div class="alert alert-danger"><?php echo $error; ?></div>
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

