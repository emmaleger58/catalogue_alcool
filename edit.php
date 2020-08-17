<?php

  include "edit_function.php";

?>

<div class="bodyblack text-light pt-4">

  <div class="container d-flex justify-content-center">

  <div class=" container d-flex flex-column align-items-center bgabout">

    <form  class="p-5 text-center text-dark" method="post" id="formedit" enctype="multipart/form-data">
      <div class="p-2">
      <p>Titre : </p><input type="text" name="titre" value="<?php echo htmlspecialchars($text['titre']) ?>" size="50">
      </div>
      <div class="p-2">
        <p>Date : </p><input type="text" name="date" value="<?php echo htmlspecialchars($text['date']) ?>" size="50">
      </div>
      <div class="p-2">
        <p>Genre : </p><input type="text" name="genre" value="<?php echo htmlspecialchars($text['genre']) ?>" size="50">
      </div>
      <div class="p-2">
        <p>Prix: </p><input type="text" name="prix" value="<?php echo htmlspecialchars($text['prix']) ?>" size="50">
      </div>
      <div class="p-2">
        <p>Développeur : </p><input type="text" name="developpeur" value="<?php echo htmlspecialchars($text['developpeur']) ?>" size="50">
      </div>
      <div class="p-2">
        <p>Téléchargement : </p><input type="text" name="telechargement" value="<?php echo htmlspecialchars($text['telechargement']) ?>" size="50">
      </div>
      <div class="p-2">
        <p>Description : </p><textarea name="description" id="descritpion" rows="8" cols="100" ><?php echo  htmlspecialchars($text['description']) ?></textarea>
      </div>
      <div class="p-2">
        <p>Image : </p><img class='py-3 col' src='<?php echo "".$text['image']."" ?>' alt=''>
          <input type="hidden" name="image" value='<?php echo "".$text['image']."" ?>'>
          <input type='file' name='new_image'>
      </div>
      <div class="p-2">
        <input class="btn" type="submit" name="submit" value="Submit">
      </div>
        </form>
