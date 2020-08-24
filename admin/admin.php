<?php // Initialiser la session
session_start();
session_regenerate_id();
// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
if(!isset($_SESSION["user"])){
  header("Location: login.php");
  exit();
}
