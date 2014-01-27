<?php
require_once('include/connexion.inc.php');


setcookie('sid','',-1);
$_SESSION['article']= 'deco';
header('location: index.php');

?>

