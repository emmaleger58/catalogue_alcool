<?php
include "include/head.php";
include "include/navbar.php";
include "include/config.php";
;
// $_GET['id'];
 ?>

<link rel="stylesheet" href="css/style.css">
</head>
  <body>
    <div class="vertical">
      <div class="title">

<?php
      $stmt = $db->prepare("SELECT titre FROM jeux_video ORDER BY id DESC");
      $stmt->execute();
      $catalogue = $stmt->fetchAll();
      foreach ($catalogue as $row) {
        echo $row['titre'] . '<br>';
      }

?>

</div>
    <div class="space">
      <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-12 center">

      <?php
      $stmt = $db->prepare('SELECT image FROM jeux_video ORDER BY Id DESC');
      $stmt->execute();
      $catalogue = $stmt->fetchAll();
      foreach ($catalogue as $row) {
        echo "<img class ='img-fluid' src='".$row['image']."' <br>";
      }

?>
</div>

<div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-12">
  <?php
      $stmt = $db->prepare("SELECT * FROM jeux_video ORDER BY Id DESC");
      $stmt->execute();
      $catalogue = $stmt->fetchAll();
      foreach ($catalogue as $row) {
        echo 'Robe : ' . $row['genre'] . '<br>';
        echo 'Pays : ' . $row['date'] . '<br>';
        echo 'Prix : ' . $row['prix'] . '€<br>';
        echo 'Provenance : ' . $row['developpeur'] . '<br>';
        // echo 'Note : ' . $row[''] . '<br>';
        // echo 'Jsp : ' . $row[''] . '<br>';
      }

      $stmt = $db->prepare("SELECT description FROM jeux_video ORDER BY Id DESC");
      $stmt->execute();
      $catalogue = $stmt->fetchAll();
      foreach ($catalogue as $row) {
        echo '<br>' . $row['description'] . '<br>';
      }
       ?>
     </div>

    </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
