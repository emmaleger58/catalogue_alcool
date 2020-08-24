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

    $search='SELECT * FROM alcool';
    $params=[];
    if(isset($_POST['type'])){
      $search.=' WHERE type LIKE :type';
      $params[':type']="%".addcslashes($_POST['type'],'_')."%";
      $resultats=$db->prepare($search);
      $resultats->execute($params);
    }
   if(isset($_POST['terme'])){
      $search.=' WHERE nom LIKE :nom';
      $params[':nom']="%".addcslashes($_POST['terme'],'_')."%";
      $resultats=$db->prepare($search);
      $resultats->execute($params);
    }
    else {
      $resultats=$db->prepare($search);
      $resultats->execute($params);
    }

?>
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/searchbar.css">
</head>
<body >
<video autoplay muted loop id="myVideo">
  <source src="img/BGbeer.mp4" type="video/mp4">
</video>

<div class="container">

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
  <div class=" container d-flex align-items-center">
      <div class="">
        <select class="form-control" name="type">
          <option value=''>toutes les bières</option>
            <?php
            foreach ($types as $type) {
                echo "<option value='".$type["type"]."'>".$type["type"]."</option>";
            }
              ?>
        </select>
      </div>
      <div class="p-2">
        <input class="btn btn-warning" type="submit" name="submit" value="GO!!">
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

            echo "<div class='blurred-box-card mb-4 mx-2'>
                    <a href='detail.php?id=".$d['id']."' class='test'>
                    ";
                  echo "<div class='card' >";
                    echo "<h5 class='card-title text-center p-2'>".$d['nom']."</h5>";
                       echo "<img src='".$d['image']."' class='card-img-top p-1' alt='...'>";
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
    </div>
</div>
</body>
  <!-- <script src="main.js" ></script> -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
