<?php 
$servername = "localhost";
$username = "root";
$password = "66321100Mss17?";

try {
  $conn = new PDO("mysql:host=$servername;dbname=bd_connexion", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //echo "Connection réussie";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}