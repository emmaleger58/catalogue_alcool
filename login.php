<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="admin.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<?php
require('config_admin.php');
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
          header('location: user.php');
        }
    } else {
        echo 'Le mot de passe est invalide.';
      }



}


?>
<form class="box" action="" method="post" name="login">
<h1 class="box-title">Connexion</h1>
<div class="m-4">

<input type="text" class="box-input" name="user" placeholder="Nom d'utilisateur">
<input type="password" class="box-input" name="password" placeholder="Mot de passe">
<input type="submit" value="Connexion " name="submit" class="box-button">
</div>

<p class="box-register">Vous êtes nouveau ici ? <a href="register.php">S'inscrire</a></p>
<?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>
</form>





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
