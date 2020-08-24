<?php

include "include/head.php";
include "form_valid.php";
include "include/navbar.php";
?>
<link rel="stylesheet" href="css/style.css">
</head>
<div class="contact-body container-fluid d-flex align-items-center">


  <div class="container contact-div blurred-box d-flex flex-column align-items-center text-light p-4 col-lg-6 col-xs">
    <div class="">
      <h1 class="py-3 px-5">Contact</h1>
    </div>
    <form class="form-row d-flex flex-column align-items-center" action="" method="POST">
      <div class="d-flex">
        <div class="p-2">
          <input id="nom" class="col" placeholder="Nom" type = "text" name="nom" required pattern="^[A-Za-z '-]+$" maxlength="25">

        </div>

        <div class="p-2">
          <input id="email" class="col" placeholder="Email" type = "email" name="email" required pattern="^[A-Za-z0-9._%-]+@{1}[A-Za-z0-9.-]+\.{1}[A-Za-z]{2,6}$">
        </div>
      </div>


      <div class="p-2">
        <textarea id="message" class="col" rows="4" cols="60" name="message" placeholder="Entrez votre commentaire..." required></textarea>
        </div>

        <div class="p-2">
          <button type="submit" class=" btn btn-warning ">Envoyer</button>
        </div>
    </form>
  </div>
</div>
<?php

?>
