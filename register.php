<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
require('config.php');
if (isset($_REQUEST['user'], $_REQUEST['email'], $_REQUEST['password'])){
  // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
  $user = stripslashes($_REQUEST['user']);
  // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
  $email = stripslashes($_REQUEST['email']);
  // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
  $password = stripslashes($_REQUEST['password']);
  //requéte SQL + mot de passe crypté
    $query = $db->prepare("INSERT into `admin` (user, email, type, password)
              VALUES (:user, :email, :type, :password)");
    $query->execute(array(
      ':user' => $user,
      ':email' => $email,
      ':type' => 'user',
      ':password'=> password_hash($password, PASSWORD_DEFAULT),
    ));
       echo "<div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
       </div>";
}
?>
<form class="box" action="" method="post">
    <h1 class="box-title">S'inscrire</h1>
  <input type="text" class="box-input" name="user" placeholder="Nom d'utilisateur" required />
    <input type="text" class="box-input" name="email" placeholder="Email" required />
    <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />
    <input type="submit" name="submit" value="S'inscrire" class="box-button" />
    <p class="box-register">Déjà inscrit ? <a href="login.php">Connectez-vous ici</a></p>
</form>
</body>
</html>
