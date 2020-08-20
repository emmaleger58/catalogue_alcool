<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="admin.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<?php
require('config_admin.php');

if (isset($_REQUEST['user'], $_REQUEST['email'], $_REQUEST['type'], $_REQUEST['password'])){
  // récupérer le nom d'utilisateur
  $user = stripslashes($_REQUEST['user']);
  // récupérer l'email
  $email = stripslashes($_REQUEST['email']);
  // récupérer le mot de passe
  $password = stripslashes($_REQUEST['password']);
  // récupérer le type (user | admin)
  $type = stripslashes($_REQUEST['type']);

  $stmt = $db->prepare("SELECT * FROM admin WHERE user=?");
  $stmt->execute([$user]);
  $users = $stmt->fetch();
  if ($users) {

      echo "<div class='column'> <div class='text-center'> Le nom d'utilisateur est déjà utilisé.</div>" ;
    } else {  //requête SQL + mot de passe crypté
    $query = $db->prepare("INSERT into `admin` (user, email, type, password)
          VALUES (:user, :email, :type, :password)");

    $query->execute(array(
      ':user' => $user,
      ':email' => $email,
      ':type' => $type,
      ':password'=> password_hash($password, PASSWORD_DEFAULT),
    ));

       echo "<div class='sucess'>
             <h3>L'utilisateur a été créé avec succès.</h3>
             <p>Cliquez <a href='home.php'>ici</a> pour retourner à la page d'accueil</p>
       </div>";
    }
  }
?>
<form class="box" action="" method="post">
    <h1 class="box-title">Add user</h1>
    <div class="">

  <input type="text" class="box-input" name="user"
  placeholder="Nom d'utilisateur" required />

    <input type="text" class="box-input" name="email"
  placeholder="Email" required />

  <div>
      <select class="box-input" name="type" id="type" >
        <option value="" disabled selected>Type</option>
        <option value="admin">Admin</option>
        <option value="user">User</option>
      </select>
  </div>

    <input type="password" class="box-input" name="password"
  placeholder="Mot de passe" required />

    <input type="submit" name="submit" value="Add" class="box-button" />
  </div>

</form>

</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
