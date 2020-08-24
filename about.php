<?php
include "include/head.php";
include "include/navbar.php";
include "include/config.php";
 ?>

 <link href="https://fonts.googleapis.com/css2?family=Hepta+Slab:wght@500&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css2?family=MedievalSharp&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css2?family=Rochester&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="css/footer.css">
 <link rel="stylesheet" href="css/about_style.css">
</head>
  <body>
    <div id='container'>
      <video autoplay muted loop id="myVideo">
        <source id=vidlist src="imgvid/champs.mp4" type="video/mp4">
        <!-- <source src="imgvid/Hops.mp4" type="video/mp4">
        <source src="imgid/Drink.mp4" type="video/mp4">   -->
      </video>
      <h1 id='titre'>À propos</h1>
      <div  class="d-flex row justify-content-center" id='box1'>
        <div class="d-flex col-lg-6 col-12 justify-content-center" id='portrait'>
          <img class ="img-fluid. max-width:100%" src="imgvid/moine.jpg">
        </div>
        <div class="d-flex flex-column align-items-center col-lg-6 col-12"id='biographie'>
          <div class="card">
            <div class="card-body">
              <h2 id='title2'>"Notre Bière est la votre !"</h2>
              <p></p>
              <p></p>
              <p>Né en 1780, Théobald D, révolutionna le marché de la bière par son sens du partage.
              Voulant s'inspirer des Monastères de La
              Trappe et des idéologies de St Benedict, il décide en 1833 de brasser sa propre bière au profits des plus démunies.
              Cependant, Lucien P, Evêque de la commune de Dontranc à cette époque, s'oppose fortement au moine bienfaiteur.
              C'est alors que Theobald P montre son ingéniosité , il décide de vendre son breuvage afin d'en faire partager les profits au Diocèse Dontrainc et aux plus pauvres.
              C'est alors qu'il se voit autorisé à poursuivre sa missions.</p>
              <p>"Les bières du Theobald", rebaptisé la "La Cave Key" en 1950 compte aujourd'hui plusieurs recettes de bières, de partenaires, mais aussi de marques.
              Cependant ses objectifs n'ont pas changer, partager "l'amour de la pinte" et étancher la soif de son prochain.
              C'est pourquoi La Cave Key offres aujourd'hui 60% de ses revenues à des oeuvres caritatives.
              La Cave Key; c'est une tradition, une histoire, un partage. </p>
            </div>
           </div>
          </div>
        </div>
      </div>
    <script src="main.js"></script>
<!-- footer.php -->
<?php include "include/footer.php"?>
