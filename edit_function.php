<?php
include "config.php";


// $id = $_GET['id'];
if (isset($_POST['submit'])) {
  $titre = $_POST['titre'];
  $description = $_POST['description'];
  $genre = $_POST['genre'];
  $date = $_POST['date'];
  $prix = $_POST['prix'];
  $developpeur = $_POST['developpeur'];
  $telechargement = $_POST['telechargement'];
  $image = $_POST['image'];

try {
$stmt = $conn->prepare("UPDATE jeux_video SET titre = :titre, description = :description, genre = :genre, date = :date, prix = :prix, developpeur = :developpeur, telechargement = :telechargement, image = :image WHERE id = 1");

if (!empty($_FILES['new_image']['name'])){
$filename = $_FILES['new_image']['name'];
           $target_files = 'img/'.$filename;
           $file_extension = pathinfo($target_files,PATHINFO_EXTENSION);
           $file_extension = strtolower($file_extension); // convertir notre chaine de character en miniscule
           $valid_extension = array('png','jpg','jpeg','PNG','JPG','JPEG');
           // on vérifie si le fichier a une extension valide
           if (in_array($file_extension,$valid_extension)) {
          if (move_uploaded_file($_FILES['new_image']['tmp_name'],$target_files)) {}}}
          else {
            $target_files = $image ;
          }

$stmt->execute(array(
  ':titre'=>$titre,
  ':description'=>$description,
  ':genre'=>$genre,
  ':date'=>$date,
  ':prix'=>$prix,
  ':developpeur'=>$developpeur,
  ':telechargement'=>$telechargement,
  ':image'=>$target_files,
));
}

catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
}


try {
$sql = $conn->prepare("SELECT titre, description, genre, date, prix, developpeur, telechargement, image
                        FROM jeux_video
                         WHERE id = 1
                        ");
$sql->execute();
$texts = $sql->fetchAll();
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

foreach ($texts as $text) {
}
 ?>
