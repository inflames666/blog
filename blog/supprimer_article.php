<?php
include('include/connexion.inc.php');
include('include/fonction.inc.php');

$id= (int)var_get('id');

$sql = "DELETE FROM article WHERE Id=$id";
mysql_query($sql);
 $_SESSION['article'] = 'supprimé';
header('location: index.php');
