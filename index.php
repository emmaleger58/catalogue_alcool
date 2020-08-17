<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["user"])){
    header("Location: login.php");
    exit();
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Yoann Abran, Kevin Nguma, Emma Léger">
    <title>Jeux vidéos</title>
  <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="sucess">
    <h1>Bienvenue <?php echo $_SESSION['user']; ?>!</h1>
    <p>C'est votre tableau de bord.</p>
    <a href="logout.php">Déconnexion</a>
    </div>
  </body>
</html>
