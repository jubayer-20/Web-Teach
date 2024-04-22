<?php 
setcookie('flag', 'dest', time()-1, '/');
header('location: ../view/home.php');
?>
