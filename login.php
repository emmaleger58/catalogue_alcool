<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
require('config.php');
session_start();

if (isset($_POST['user'])){
  $user = stripslashes($_REQUEST['user']);
  $_SESSION['user'] = $user;
  $password = stripslashes($_REQUEST['password']);
    $query = $db->prepare("SELECT * FROM `admin` WHERE user='$user'");
    $query->execute();

    $usertypes = $query->fetchAll();
    // vérifier si l'utilisateur est un administrateur ou un utilisateur
    foreach ($usertypes as $usertype) {
    }


        if (password_verify($password, $usertype['password'])) {
        echo 'Le mot de passe est valide !';
        if ($usertype['type'] == 'admin') {
          header('location: home.php');
        }else{
          header('location: index.php');
        }
    } else {
        echo 'Le mot de passe est invalide.';
      }



}


?>
<form class="box" action="" method="post" name="login">
<h1 class="box-title">Connexion</h1>
<input type="text" class="box-input" name="user" placeholder="Nom d'utilisateur">
<input type="password" class="box-input" name="password" placeholder="Mot de passe">
<input type="submit" value="Connexion " name="submit" class="box-button">
<p class="box-register">Vous êtes nouveau ici ? <a href="register.php">S'inscrire</a></p>
<?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>
</form>
</body>
</html>
