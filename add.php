<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>test</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>
  <body>

    <?php
include_once 'connect.php';

  $sql = "SELECT * FROM `alcool` WHERE 1";
    foreach ($conn -> query($sql) as $row) {
      echo $row['nom'] . " " . $row['type'] . " " . $row['taux_alcool'] . " " .  $row['prix'] . " " . $row['origine'] . " " . $row['note'] . " " . $row['description'] . " " . $row['image'] . '<br>';
}
echo "<br>" . "<br>";

    ?>

<!-- Add a drink -->


<h2>Ajouter une Boisson</h2>
  <form name="adder" action='add.php' method=post enctype='multipart/form-data'>
    <ul>
      <li class=""><p>Nom  : <input type="text" name="nom" value=''/></p></li>
      <li class=""><p>Type : <input type="text" name="type" value=''/></p></li>
      <li class=""><p>Taux d'alcool : <input type="text" name="taux_alcool" value=''/></p></li>
      <li class=""><p>Prix : <input type="text" name="prix" value=''/></p></li>
      <li class=""><p>Origine : <input type="text" name="origine" value=''/></p></li>
      <li class=""><p>Note : <input type="text" name="note" value='note'/></p></li>
      <li class=""><p>Description : <textarea rows=8 name="description" cols='50' value='description'></textarea></p></li>
      <li class="list-group-item specialopac"><p><input type="submit" name="add" value="Add a drink"></p></li>
      <li class=""><p>Image : <input type="file" name="image"/></p></li>
    </ul>
  </form>

<!-- Delete drink -->

<h2>Supprimer une Boisson</h2>
  <form name="delete" action="delete.php" method="post">
    <ul class="">
      <li class=""><p>Nom de la Boisson : <input type="text" name="nom" value=''/></p></li>
      <li class=""><p><input type="submit" name="suppress" value="Delete a drink"></p></li>
    </ul>
</form>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
