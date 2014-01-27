<?php

function var_get($nom)
{
    return(isset($_GET[$nom])) ? $_GET[$nom] : false;
}

function var_post($nom)
{
    return(isset($_POST[$nom])) ? $_POST[$nom] : false;
}


function requete_notif($ma_requete,$var_notification,$val_notification)
{
    if(mysql_query($ma_requete))
        $SESSION[$val_notification] = $val_notification;
    else
        $SESSION[$var_notification] = 'erreur';
}