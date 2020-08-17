<?php

  include "edit_function.php";

?>

<div class="bodyblack text-light pt-4">

  <div class="container d-flex justify-content-center">

  <div class=" container d-flex flex-column align-items-center bgabout">

    <form  class="p-5 text-center text-dark" method="post" id="formedit" enctype="multipart/form-data">
      <div class="p-2">
      <p>nom : </p><input type="text" name="nom" value="<?php echo htmlspecialchars($text['nom']) ?>" size="50">
      </div>
      <div class="p-2">
        <p>type : </p><input type="text" name="type" value="<?php echo htmlspecialchars($text['type']) ?>" size="50">
      </div>
      <div class="p-2">
        <p>taux_alcool : </p><input type="text" name="taux_alcool" value="<?php echo htmlspecialchars($text['taux_alcool']) ?>" size="50">
      </div>
      <div class="p-2">
        <p>Prix: </p><input type="text" name="prix" value="<?php echo htmlspecialchars($text['prix']) ?>" size="50">
      </div>
      <div class="p-2">
        <p>origine : </p><input type="text" name="origine" value="<?php echo htmlspecialchars($text['origine']) ?>" size="50">
      </div>
      <div class="p-2">
        <p>note : </p><input type="text" name="note" value="<?php echo htmlspecialchars($text['note']) ?>" size="50">
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
