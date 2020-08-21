<?php
include "admin.php";
include "navadmin.php";
include "../include/head.php";
include_once '../include/config.php';

  if(isset($_POST['suppress'])) {
    $nom = $_POST['nom'];

  if(empty($nom))
  {
    echo"<font color='red'>'Ne peut rester vide !'</font>";
  }
  else{

    try{
      $stmt =$db->prepare("DELETE FROM `alcool` WHERE nom = :nom");
      $stmt->execute(array(
        ':nom'=>$nom
        ));
        }
      catch(PDOException $e) {
        echo $e->getMessage();
      }
      echo "<font color='green'><br>Boisson supprimée avec succes !</font>";
    }
  }

?>
<link rel="stylesheet" href="css/admin.css" />
</head>
<body>
  <div class="box">
    <h2>Supprimer une Boisson</h2>
      <form name="delete" action="" method="post">
        <ul class="">
          <li class=""><p>Nom de la Boisson : <input type="text" name="nom" value=''/></p></li>
          <li class=""><p><input type="submit" name="suppress" value="Delete a drink"></p></li>
        </ul>
    </form>
  </div>

</body>
