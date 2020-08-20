<?php
include_once 'connect.php';

  if(isset($_POST['suppress'])) {
    $nom = $_POST['nom'];

  if(empty($nom))
  {
    echo"<font color='red'>'Ne peut rester vide !'</font>";
  }
  else{

    try{
      $stmt =$conn->prepare("DELETE FROM `alcool` WHERE nom = :nom");
      $stmt->execute(array(
        ':nom'=>$nom
        ));
        }
      catch(PDOException $e) {
        echo $e->getMessage();
      }
      echo "<font color='green'><br>Boisson supprimée avec succés !</font>";
    }
  }
?>
