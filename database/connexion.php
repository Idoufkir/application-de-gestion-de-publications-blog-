<?php
$servername = "localhost";
$username = "root";
$passw = "";

try {
  $conn = new PDO("mysql:host = $servername; dbname=gestion_blog", $username, $passw);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connection à la base de donneés réussie ..";
} catch(PDOException $e) {
  echo "Echec de la connection ...!! " .$e->getMessage();
}
?>
