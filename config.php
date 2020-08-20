<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alcool";

try {
$db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "<font color='green'>Connected successfully</font>";
} catch(PDOException $e) {
echo "Connection failed: " . $e->getMessage();
}

 ?>
