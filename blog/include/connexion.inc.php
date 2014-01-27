<?php
session_start();
mysql_connect('localhost','blog','ctYMzq9XLehhJ7XW');
mysql_select_db('tpblog');
   $connect=FALSE;
if(isset($_COOKIE['sid']))
{
    $sid = $_COOKIE['sid'];
    $sql= mysql_query("SELECT * FROM utilisateurs WHERE sid= '$sid'");
    
if(mysql_fetch_array($sql))
{
    $connect=TRUE;
}

 

}
