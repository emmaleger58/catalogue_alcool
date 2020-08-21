<?php
  include "admin.php";
  include "navadmin.php";
  include "function/edit_function.php";
  include "../include/head.php";
?>

<body >

<div class="bodyblack text-light pt-4">

  <div class="container d-flex justify-content-center">

    <div class=" container d-flex flex-column align-items-center bgabout">

      <form  class="p-5 text-center text-dark " method="post" id="formedit" enctype="multipart/form-data">
        <div class="d-flex flex-column align-items-center">


        <div class="p-2 container">
          <p>nom : <input type="text" name="nom" value="<?php echo htmlspecialchars($text['nom']) ?>" size="50"></p>
        </div>
        <div class="p-2 container">
          <p>type : <input type="text" name="type" value="<?php echo htmlspecialchars($text['type']) ?>" size="50"></p>
        </div>
        <div class="p-2 container">
          <p>taux_alcool : <input type="number" min='0.0' max='100.0' step='0.1' name="taux_alcool" value="<?php echo htmlspecialchars($text['taux_alcool']) ?>" size="50"></p>
        </div>
        <div class="p-2 container">
          <p>Prix: <input type="number" min='0.00' step='0.01' name="prix" value="<?php echo htmlspecialchars($text['prix']) ?>" size="50"></p>
        </div>
        <div class="p-2 container">
          <p>origine : <input type="text" name="origine" value="<?php echo htmlspecialchars($text['origine']) ?>" size="50"></p>
        </div>
        <div class="p-2 container">
          <p>note : <input type="number" min='0.0' max='10.0' step='0.1' name="note" value="<?php echo htmlspecialchars($text['note']) ?>" size="50"></p>
        </div>
        <div class="p-2 container">
          <p>Description : <textarea name="description" id="descritpion" rows="8" cols="100" ><?php echo  htmlspecialchars($text['description']) ?></textarea>
        </div></p>
        <div class="p-2 container">
          <p>Image : </p><img class='py-3 ' src='../<?php echo "".$text['image']."" ?>' alt=''>
            <input type="hidden" name="image" value='<?php echo "".$text['image']."" ?>'>
            <input type='file' name='new_image'>
        </div>
        <div class="p-2 container">
          <input class="btn btn-primary" type="submit" name="submit" value="Submit">
        </div>
          </div>
          </form>
      </div>
    </div>
  </div>
</body>
