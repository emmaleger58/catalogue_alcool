<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
require('config.php');

if (isset($_REQUEST['user'], $_REQUEST['email'], $_REQUEST['type'], $_REQUEST['password'])){
  // récupérer le nom d'utilisateur
  $user = stripslashes($_REQUEST['user']);
  $user = mysqli_real_escape_string($db, $user);
  // récupérer l'email
  $email = stripslashes($_REQUEST['email']);
  $email = mysqli_real_escape_string($db, $email);
  // récupérer le mot de passe
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($db, $password);
  // récupérer le type (user | admin)
  $type = stripslashes($_REQUEST['type']);
  $type = mysqli_real_escape_string($db, $type);

    $query = "INSERT into `admin` (user, email, type, password)
          VALUES ('$user', '$email', '$type', '".password_hash($password, PASSWORD_DEFAULT)."')";
    $res = mysqli_query($db, $query);

    if($res){
       echo "<div class='sucess'>
             <h3>L'utilisateur a été créée avec succés.</h3>
             <p>Cliquez <a href='home.php'>ici</a> pour retourner à la page d'accueil</p>
       </div>";
    }
}else{
?>
<form class="box" action="" method="post">
    <h1 class="box-title">Add user</h1>
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

    <input type="submit" name="submit" value="+ Add" class="box-button" />
</form>
<?php } ?>
</body>
</html>
