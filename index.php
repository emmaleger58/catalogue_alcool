<?php
include "head.php";
include "navbar.php";
include "config.php";

  try {
    $tri = $conn->prepare("SELECT type
                          FROM alcool
                          GROUP BY type");
          $tri->execute();
          $types = $tri->fetchAll();
  }
    catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
    foreach ($types as $type) {
    }

    $search='SELECT * FROM alcool';
    $params=[];
    if(isset($_POST['type'])){
      $search.=' WHERE type LIKE :type';
      $params[':type']="%".addcslashes($_POST['type'],'_')."%";
      $resultats=$conn->prepare($search);
      $resultats->execute($params);
    }
   if(isset($_POST['terme'])){
      $search.=' WHERE nom LIKE :nom';
      $params[':nom']="%".addcslashes($_POST['terme'],'_')."%";
      $resultats=$conn->prepare($search);
      $resultats->execute($params);
    }

?>

<body>
  <video autoplay muted loop id="myVideo">
  <source src="img/BGbeer.mp4" type="video/mp4">
</video>

<div class="tri container py-5">
  <form action = "" method = "POST">
   <input type = "search" name = "terme">
   <input type = "submit" name = "submit" value = "Rechercher">
 </form>
</div>
<div class="container">
  <form class="" action="" method="post">
    <select class="" name="type">
      <option value=''>--Please choose an option--</option>
        <?php
        foreach ($types as $type) {
            echo "<option value='".$type["type"]."'>".$type["type"]."</option>";
        }
          ?>
      <input type="submit" name="submit" value="choose">
    </select>
  </form>

</div>
<div class="sectioncard container d-flex flex-column align-items-center pt-5">
<div class=" container card-deck row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 " >
<?php
				if($resultats->rowCount()>0){
					while($d=$resultats->fetch(PDO::FETCH_ASSOC)){

            echo "<a href='single.php?id=".$d['id']."' class=''>
                    <div class=' heightcard col mb-4'>";
                  echo "<div class='card' >";
                    echo "<h5 class='card-title text-center p-2'>".$d['nom']."</h5>";
                       echo "<img src='".$d['image']."' class='card-img-top' alt='...'>";
            // echo "<div class='card-body d-flex flex-column justify-content-between'>";
            // echo "<a href='single.php?id=".$row['id']."' class='btn'>GO !!</a>";
               echo "</div>
                  </div>
                </a>";

					}
					$resultats->closeCursor();
				}
				else{ echo '<tr><td colspan=4>aucun résultat trouvé</td></tr>'.
				$connect=null;}
			?>
    </div>
    </div>


  <!-- <script src="main.js" ></script> -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
