<?php // Initialiser la session
session_start();
// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
if(!isset($_SESSION["user"])){
  header("Location: login.php");
  exit();
}
