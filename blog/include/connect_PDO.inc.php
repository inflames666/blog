<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=tpblog', 'blog', 'ctYMzq9XLehhJ7XW');
} catch (Exception $e) {
echo 'erreur : '.$e->getMessage().'<br />';
echo 'N° : '.$e.getCode();
}