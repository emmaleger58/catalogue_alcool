<?php
include "include/head.php";
include "include/navbar.php";
include "include/config.php";

  try {
    $tri = $db->prepare("SELECT type
                          FROM alcool
                          GROUP BY type");
          $tri->execute();
          $types = $tri->fetchAll();
  }
    catch(PDOException $e) {
      echo "connection failed: " . $e->getMessage();
    }
    foreach ($types as $type) {
    }

    if(isset($_GET['page']) && !empty($_GET['page'])){
        $currentPage = (int) strip_tags($_GET['page']);
    }else{
        $currentPage = 1;
    }
    // On se connecte à là base de données


    // On détermine le nombre total d'alcool
    $sql = 'SELECT COUNT(*) AS nb_beers FROM `alcool`;';

    // On prépare la requête
    $query = $db->prepare($sql);

    // On exécute
    $query->execute();

    // On récupère le nombre d'alcool
    $result = $query->fetch();

    $nbArticles = (int) $result['nb_beers'];

    // On détermine le nombre d'alcool par page
    $parPage = 6;

    // On calcule le nombre de pages total
    $pages = ceil($nbArticles / $parPage);

    // Calcul du 1er article de la page
    $premier = ($currentPage * $parPage) - $parPage;




    if(isset($_POST['type'])){
      $type = addcslashes($_POST['type'],'_');
      $search='SELECT * FROM alcool WHERE type LIKE :type LIMIT :premier, :parpage; ';

      $resultats=$db->prepare($search);
      $type= "%".$type."%";
      $resultats->bindParam(':type', $type, PDO::PARAM_STR);
      $resultats->bindValue(':premier', $premier, PDO::PARAM_INT);
      $resultats->bindValue(':parpage', $parPage, PDO::PARAM_INT);
      $resultats->execute();
    }
   else if(isset($_POST['terme'])){
     $nom = addcslashes($_POST['terme'],'_');
      $search=' SELECT * FROM alcool WHERE nom LIKE :nom LIMIT :premier, :parpage; ';

      $resultats=$db->prepare($search);
      $nom="%".$nom."%";
      $resultats->bindParam(':nom', $nom, PDO::PARAM_STR);
      $resultats->bindValue(':premier', $premier, PDO::PARAM_INT);
      $resultats->bindValue(':parpage', $parPage, PDO::PARAM_INT);
      $resultats->execute();
    }

    else {
      $search='SELECT * FROM alcool LIMIT :premier, :parpage; ';
      $resultats=$db->prepare($search);
      $resultats->bindValue(':premier', $premier, PDO::PARAM_INT);
      $resultats->bindValue(':parpage', $parPage, PDO::PARAM_INT);
      $resultats->execute();
    }

?>
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/searchbar.css">

</head>
<body >
<video autoplay muted loop id="myVideo">
  <source src="img/BGbeer.mp4" type="video/mp4">
</video>

<div class="container pt-5">

<div class="tri blurred-box container py-4 d-flex justify-content-between flex-column flex-md-row">
  <div class="search-contain container d-flex justify-content-center py-2 ">
    <div class="search-bar ">
      <form action = "" method = "POST">
       <input type = "search" name = "terme" placeholder="Search...">
          <div class="search"></div>
     </form>
    </div>
  </div>
<div class=" container d-flex justify-content-center align-items-center py-2">
  <form class="form-group" action="" method="post">
  <div class=" select-beer container d-flex align-items-center">
      <div class="">
        <select class="beer_select form-control" name="type">
          <option value=''>toutes les bières</option>
            <?php
            foreach ($types as $type) {
                echo "<option value='".htmlspecialchars($type["type"])."'>".htmlspecialchars($type["type"])."</option>";
            }
              ?>
        </select>
      </div>
      <div class="p-2">
        <input class="btn" type="submit" name="submit" value="GO!!">
      </div>
    </form>
  </div>
</div>

</div>

<div class="sectioncard container d-flex flex-column align-items-center pt-5">
<div class=" container card-deck row row-col-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 d-flex justify-content-center " >
<?php
				if($resultats->rowCount()>0){
					while($d=$resultats->fetch(PDO::FETCH_ASSOC)){

            echo "<div class=' blurred-box-card  mb-4 mx-2'>
                    <a href='".htmlspecialchars($d['nom'])."' class=''>
                    ";
                  echo "<div class='card' >";
                    echo "<div class='container-card-title d-flex align-items-center justify-content-center p-2'><h5 class='card-title text-center p-2'>".htmlspecialchars($d['nom'])."</h5></div>";
                       echo "<div class='container-card-img d-flex justify-content-center align-items-center'><img src='".htmlspecialchars($d['image'])."' class='w-auto card-img-top img-fluid p-1' alt='...'></div>";
               echo "</div>
                    </a>
                  </div>";

					}
					$resultats->closeCursor();
				}
				else{ echo '<tr><td colspan=4>aucun résultat trouvé</td></tr>'.
				$connect=null;}
			?>
    </div>
    <nav>
<ul class="pagination">
    <!-- Lien vers la page précédente (désactivé si on se trouve sur la 1ère page) -->
    <li class="page-item <?php echo ($currentPage == 1) ? "disabled" : "" ?>">
        <a href="beer.php?page=<?php echo $currentPage - 1 ?>" class="page-link">Précédente</a>
    </li>
    <?php for($page = 1; $page <= $pages; $page++): ?>
      <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
      <li class="page-item <?php echo ($currentPage == $page) ? "active" : "" ?>">
            <a href="beer.php?page=<?php echo $page ?>" class="page-link"><?php echo $page ?></a>
        </li>
    <?php endfor ?>
      <!-- Lien vers la page suivante (désactivé si on se trouve sur la dernière page) -->
      <li class="page-item <?php echo ($currentPage == $pages) ? "disabled" : "" ?>">
        <a href="beer.php?page=<?php echo $currentPage + 1 ?>" class="page-link">Suivante</a>
    </li>
</ul>
</nav>
    </div>
</div>
<?php  include "include/footer.php";?>
  <!-- <script src="main.js" ></script> -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
