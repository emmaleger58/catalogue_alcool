<?php include "../include/head.php"; ?>

<link rel="stylesheet" href="css/admin.css">
</head>
<body>
<?php
require('../include/config.php');
if (isset($_REQUEST['user'], $_REQUEST['email'], $_REQUEST['password'])){
  // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
  $user = stripslashes($_REQUEST['user']);
  // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
  $email = stripslashes($_REQUEST['email']);
  // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
  $password = stripslashes($_REQUEST['password']);


$stmt = $db->prepare("SELECT * FROM admin WHERE user=?");
$stmt->execute([$user]);
$users = $stmt->fetch();
if ($users) {

    echo "<div class='sucess'>Le nom d'utilisateur est déjà utilisé.";
  } else {  //requête SQL + mot de passe crypté
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
}
?>
<form class="box" action="" method="post">
    <h1 class="box-title">S'inscrire</h1>
    <div class="m-4">

  <input type="text" class="box-input" name="user" placeholder="Nom d'utilisateur" required />
    <input type="text" class="box-input" name="email" placeholder="Email" required />
    <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />

    <input type="submit" name="submit" value="S'inscrire" class="box-button" />

  </div>
    <p class="box-register">Déjà inscrit ? <a href="login.php">Connectez-vous ici</a></p>
</form>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
