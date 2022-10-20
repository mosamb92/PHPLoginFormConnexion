<?php 
require 'elements/header.php'; 
if(empty($_SESSION)):
    header('Location: login.php');
endif;
?>


<?php require 'elements/footer.php'; ?>