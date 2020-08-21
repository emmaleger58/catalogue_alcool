<?php
include "include/head.php";
include "include/navbar.php";
include "include/config.php";

$id = $_GET['id'];
try {
$sql = $db->prepare("SELECT id, nom, description, type, taux_alcool, prix, origine, note, image
                      FROM alcool
                      WHERE id = $id");
$sql->execute();
$rows = $sql->fetchAll();
} catch(PDOException $e) {
  echo "connection failed: " . $e->getMessage();
}
foreach ($rows as $row) {
}
 ?>

<link rel="stylesheet" href="css/style.css">
</head>
  <body>
    <div class="vertical">
      <div class="title">

<?php


        echo $row['nom'] . '<br>';


?>

</div>
    <div class="space">
      <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-12 center">

      <?php

        echo "<img class ='img-fluid' src='".$row['image']."' <br>";


?>
</div>

<div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-12">
  <?php

        echo 'Robe : ' . $row['type'] . '<br>';
        echo 'Taux d\'alcool : ' . $row['taux_alcool'] . '%<br>';
        echo 'Origine : ' . $row['origine'] . '<br>';
        echo 'Prix : ' . $row['prix'] . '€<br>';
        echo 'Note : ' . $row['note'] . '/5<br>';
      
        echo '<br>' . $row['description'] . '<br>';

       ?>
     </div>

    </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
