<!DOCTYPE html>
<?php 
  require_once('include/connexion.inc.php');
  ?>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Mon blog</title>
    <meta name="description" content="Petit blog pour m'initier Ã  PHP">
    <meta name="author" content="Maxime Leurette">
    <script src ="C:\wamp\www/js"></script>
    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
  </head>

  <body>
  
    <div class="container">

      <div class="content">
      
        <div class="page-header well">
          <h1>Mon Blog</h1>
        </div>
        
        <div class="row">
        
          <div class="span8">

              <?php require_once('notification.inc.php');
                
?>