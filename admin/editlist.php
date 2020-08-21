<?php
  include "../include/config.php";
  include "admin.php";
  include "navadmin.php";
  include "../include/head.php";
  try {
    $query = $db->prepare("SELECT *
                          FROM alcool
                          ");
          $query->execute();
          $beers = $query->fetchAll();
  }
    catch(PDOException $e) {
      echo "connection failed: " . $e->getMessage();
    }
?>

<body>
  <table class="table table-sm table-dark table-striped table-hover">
    <th class='px-5' scope="col">Nom</th>
    <th class='px-5' scope="col">Prix</th>
    <th class='px-5' scope="col">Type</th>
    <th class='px-5' scope="col">Taux d'alcool</th>
    <th class='px-5' scope="col">Origine</th>
    <?php
    foreach ($beers as $beer) {
    echo "<tr>
      <td class='px-5'><a class='text-light' href='edit.php?id=".$beer['id']."'>".htmlspecialchars($beer['nom'])."</a></td>
      <td class='px-5'>".htmlspecialchars($beer['prix'])."</td>
      <td class='px-5'>".htmlspecialchars($beer['type'])."</td>
      <td class='px-5'>".htmlspecialchars($beer['taux_alcool'])."</td>
      <td class='px-5'>".htmlspecialchars($beer['origine'])."</td>
    </tr>";
  }
     ?>
  </table>

</body>
