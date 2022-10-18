<?php 
require 'header.php'; 
if(empty($_SESSION)):
    header('Location: login.php');
endif;
?>




<?php require 'footer.php'; ?>