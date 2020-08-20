<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "alcool";

try {
 $db = new PDO("mysql:host=$servername;port=3306;dbname=$dbname", $username, $password);
 // set the PDO error mode to exception
 $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
 echo "Connection failed: " . $e->getMessage();
}
?>
