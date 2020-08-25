<?php
include "include/head.php";
include "include/navbar.php";
include "include/config.php";

$id = htmlspecialchars($_GET['id']);
try {
$sql = $db->prepare("SELECT  *
                      FROM alcool
                      WHERE nom = :nom");
$sql->execute(array(':nom' => $id));
$rows = $sql->fetchAll();
} catch(PDOException $e) {
  echo "connection failed: " . $e->getMessage();
}
foreach ($rows as $row) {
}
 ?>

<link rel="stylesheet" href="css/style.css">
</head>
  <body id="small">
    <div class="vertical">
      <div class="title">

<?php


        echo $row['nom'] . '<br>';


?>

</div>
    <div class="space">
      <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-12 center">

      <?php

        echo "<img class ='img-fluid' src='".htmlspecialchars($row['image'])."' <br>";


?>
</div>

<div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-12">
  <?php

        echo '<div class="blurred-box-card" Robe : ' . htmlspecialchars($row['type']) . '<br>';
        echo 'Taux d\'alcool : ' . htmlspecialchars($row['taux_alcool']) . '%<br>';
        echo 'Origine : ' . htmlspecialchars($row['origine']) . '<br>';
        echo 'Prix : ' . htmlspecialchars($row['prix']) . '€<br>';
        echo 'Note : ' . htmlspecialchars($row['note']) . '/5<br></div>';

        echo '<br><div class="blurred-box-card">' . htmlspecialchars($row['description']) . '<br> </div>';

       ?>
     </div>

    </div>

    </div>

<?php  include "include/footer.php";?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
