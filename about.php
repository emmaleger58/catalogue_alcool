<?php
include "include/head.php";
include "include/navbar.php";
include "include/config.php";
 ?>

 <link href="https://fonts.googleapis.com/css2?family=Rochester&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="css/footer.css">
 <link rel="stylesheet" href="css/about_style.css">
</head>
  <body>
    <div id='container'>
      <video autoplay muted loop id="myVideo">
        <source src="imgvid/champs.mp4" type="video/mp4">
      </video>
      <h1 id='titre'>À propos</h1>
      <div id='box1'>
        <div id='portrait'>
          <img class ="img-fluid. max-width:100%" src="imgvid/moine.jpg">
        </div>
        <div id='biographie'>
          <div class="card">
            <div class="card-body">
              <h2 id='title2'>"Notre Bière est la votre !"</h2>
              <p>This is some text within a card body.</p>
              <p>And i'm trying to make sure this card is responsive.</p>
            </div>
           </div>
          </div>
        </div>
      </div>
    </div>
    <script src="main.js"></script>
<!-- footer.php -->
<?php include "include/footer.php"?>
