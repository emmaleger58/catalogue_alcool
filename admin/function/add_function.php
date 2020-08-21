<?php

include_once '../../include/config.php';


  if(isset($_POST['add'])) {
    $nom = $_POST['nom'];
    $type = $_POST['type'];
    $description = $_POST['description'];
    $taux_alcool = $_POST['taux_alcool'];
    $prix = $_POST['prix'];
    $origine = $_POST['origine'];
    $note = $_POST['note'];

  if(empty($nom) OR empty($type) OR empty($taux_alcool) OR empty($prix) OR empty($origine) OR empty($note) OR empty($description))
  {
    echo"<font color='red'>'Ne peut rester vide !'</font>";
  }
  else{

    try{
      $stmt =$db->prepare("INSERT INTO alcool (nom, type, description, taux_alcool, prix, origine, note, image) VALUES (:nom, :type, :description, :taux_alcool, :prix, :origine, :note, :image)");

      $filename = $_FILES['image']['name'];
                  $target_files='img/' .$filename;
                  $file_extension = pathinfo($target_files, PATHINFO_EXTENSION);
                  $valid_extension = array('png', 'jpg', 'jpeg', 'PNG', 'JPG', 'JPEG');

                    if(in_array($file_extension,$valid_extension)) {
                      if (move_uploaded_file($_FILES['image']['tmp_name'],'../../'.$target_files)) {}}


      $stmt->execute(array(
        ':nom' => $nom,
        ':type' => $type,
        ':taux_alcool' => $taux_alcool,
        ':prix' => $prix,
        ':origine' => $origine,
        ':note' => $note,
        ':description' => $description,
        ':image' => $target_files,
      ));
    }
    catch(PDOException $e){
      echo $e->getMessage();
    }

      echo "<font color='green'><br>Boisson ajoutée avec succés !</font>";
    }
  }

  ?>
