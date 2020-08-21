<?php include "../include/head.php";
 ?>
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <a class="navbar-brand" href="home.php">Accueil</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarNav">
     <ul class="navbar-nav">
       <li class="nav-item active">
         <a class="nav-link" href="add_user.php">Add user <span class="sr-only">(current)</span></a>
       </li>
       <li class="nav-item active">
         <a class="nav-link" href="add.php">Add beer <span class="sr-only">(current)</span></a>
       </li>
       <li class="nav-item active">
         <a class="nav-link" href="editlist.php">Update</a>
       </li>
       <li class="nav-item active">
         <a class="nav-link" href="delete.php">Delete</a>
       </li>
       <li class="nav-item active">
         <a class="nav-link" href="logout.php">Déconnexion</a>
       </li>
     </ul>
   </div>
 </nav>
