<?php 
$servername = "localhost";
$username = "votre_nom_utilisateur_base_de_données";
$password = "votre_mot_de_passe";

try {
  $conn = new PDO("mysql:host=$servername;dbname=bd_connexion", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //echo "Connection réussie";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}