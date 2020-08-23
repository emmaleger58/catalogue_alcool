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
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae interdum ipsum, nec tincidunt augue. Maecenas nisi nisl, ultricies in dolor sed, bibendum mattis orci. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam ac feugiat dolor. Nam lorem magna, porttitor vel volutpat at, efficitur a justo. Nullam blandit enim eu tristique ullamcorper. Vestibulum aliquet rutrum eros quis mattis.</p>
              <p>Etiam aliquam lacus facilisis diam mattis, ut consequat diam iaculis. Sed placerat mauris justo, non rhoncus ipsum dapibus eu. Suspendisse at bibendum mauris. Phasellus vitae risus sed lectus luctus pharetra sed vel ante. Cras vel nisi eu lorem aliquam posuere. Nunc libero augue, faucibus a felis a, ultrices porttitor mauris. Sed non turpis bibendum tellus faucibus finibus sit amet a lectus. Suspendisse porttitor dignissim libero, vel convallis felis lacinia ut.</p>
            </div>
           </div>
          </div>
        </div>
      </div>
    </div>
    <script src="main.js"></script>
<!-- footer.php -->
<?php include "include/footer.php"?>
