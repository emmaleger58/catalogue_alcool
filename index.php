<?php
include "head.php";
include "navbar.php";
include "config.php";
try {
  $sql = $conn->prepare("SELECT id,nom, description, type, taux_alcool, prix, origine, note, image
                        FROM alcool

                        ");
        $sql->execute();
        $rows = $sql->fetchAll();
}
  catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
?>
<body>
  <video autoplay muted loop id="myVideo">
  <source src="img/BGbeer.mp4" type="video/mp4">
</video>


<div class="containeur d-flex flex-column align-items-center pt-5">
<div class=" container card-deck  row-cols-1 row-cols-sm-2  row-cols-md-3 row-cols-lg-4 " >
<?php foreach ($rows as $row){
    echo "	<div class=' heightcard col mb-4'>";
    echo "<div class='card shadow-sm bgcard text-white' >";
    echo "<h5 class='card-title text-center p-2'>".$row['nom']."</h5>";
  	echo "<img src='".$row['image']."' class='card-img-top' alt='...'>";
  	echo "<div class='card-body d-flex flex-column justify-content-between'>";
  	echo "<a href='projet-".$row['id'].".html' class='btn text-white'>GO !!</a>";
  	echo "</div>
  </div>
  </div>";
}
?>
</div>
</div>


  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
