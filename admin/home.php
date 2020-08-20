<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["user"])){
    header("Location: login.php");
    exit();
  }
  include "../include/head.php";
?>

    <link rel="stylesheet" href="css/admin.css" />

  </head>
  <body>
    <div class="sucess">
    <h1>Bienvenue <?php echo $_SESSION['user']; ?>!</h1>
    <p>C'est votre espace admin.</p>
    <div class="">

    <a href="add_user.php">Add user</a> |
    <a href="add.php">Add beer</a> |
    <a href="edit.php">Update beer</a> |
    <a href="delete.php">Delete beer</a> |
    <a href="logout.php">Déconnexion</a>
  </div>

    </ul>
    </div>





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
