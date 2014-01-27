<?php
include('include/connexion.inc.php');
//include('include/connect_PDO.inc.php');
include('include/fonction.inc.php');
include('include/haut.inc.php');
require("tpl/Smarty.class.php");

$tpl = new Smarty();
$rech = mysql_real_escape_string(var_get('r'));

$app = 2;
$page = (var_get('p')) ? var_get('p') : 1;
$debut = round(($app*$page)-$app);
$sql = mysql_query("SELECT COUNT(*) AS total FROM article");
$total = mysql_fetch_array($sql);
$nb_page = ($page > 0) ? ceil($total['total'] / $app) : 1;

$req = mysql_query("SELECT * FROM article ORDER BY DESC LIMIT $debut,$app");

if(!empty($rech))
{    
    $MonSQL = mysql_query("SELECT article.Id,Titre,Texte,Date,tags.Nom FROM article INNER JOIN `tags` ON `article`.`Tag` = `tags`.`Id`  WHERE Titre LIKE '%$search%' ORDER BY date DESC");
    $a=mysql_query("SELECT COUNT(*) AS total FROM article  WHERE Titre LIKE '%$rech%'");
    $total= mysql_fetch_array($a);
    
    if($total['total'] == 0)
        echo '<h2>aucun resultat</h2><br><br>';
    else
    {
        if($total['total'] == 1)
            echo '<h2>Resultat de la recherche</h2><br><br>';
        else 
            echo '<h2>Resultats de la recherche</h2><br><br>';     
    }
}
else
{
    $MonSQL = mysql_query("SELECT article.Id,Titre,Texte,Date,tags.Nom FROM article " . "INNER JOIN `tags` ON `article`.`Tag` = `tags`.`Id`" . "ORDER BY date DESC LIMIT ". $debut.",". $app ."; ");

    echo '<h2>Dernier article</h2><br><br>';
}


$data_list = array();
$i = 0;
while($data = mysql_fetch_array($MonSQL)){
    $data_list[] = $data;
}

$tpl->assign("data",$data_list);      
$tpl->assign("connexion",$connect);


echo '<br>';

//pagination

$i = 1;
$tpl->assign('to',1);
$tpl->assign('pagee', $page);
$tpl->assign('nb_pagee',$nb_page);

$tpl->assign('pagemoin','index.php?p='.($page - 1));
$tpl->assign('pageplus','index.php?p='.($page + 1));

$tpl->display('view/index.tpl');  

include('include/bas.inc.php');

