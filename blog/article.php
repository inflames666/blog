<?php
//require_once('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>');
require_once('include/connexion.inc.php');
require_once('include/haut.inc.php');
require_once('include/fonction.inc.php');
echo '<div class="span8">';

$modif=0;
$id="";
$titlem = "";
$contentm = "";
$namebt = "Ajouter";

if (!empty($_GET['id'])) {
    $id = (int) $_GET['id'];
    $sqlmodif = "SELECT * FROM article,tags WHERE Id=$id AND article.Tag=tags.Id";
    $resultmodif = mysql_fetch_array(mysql_query($sqlmodif));
    $titlem = $resultmodif['Titre'];
    $contentm = $resultmodif['Texte'];
    $tagm = $resultmodif['Nom'];
    $modif = 1;

    $namebt = "Modifier";
}
?>

<form action="article.php" name="formulaire" method="POST">
    <div class="clearfix">
        <label for="title">Titre</label>
        <div class="input"> 
            <input type="text" name="titre" id="titre" value="<?php echo $titlem; ?>">
        </div>
    </div>    
    <div class="clearfix">
        <label for="texte">Texte</label>
        <div class="input">
            <textarea name="texte" id="texte"><?php echo $contentm; ?></textarea>
        </div>
    </div> 
    <div class="clearfix">
        <label for="tag">Tag (1seul)</label>
        <div class="input">
            <input type="text" name="tag" id="tag" value="<?php echo $tagm; ?>">
        </div>
    </div>     
    <div class="form-action">
        <input name="id" type="hidden" value="<?php echo $id ?>" >
        <input name="modif" type="hidden" value="<?php echo $modif ?>" >
        <input name="bt" type="submit" value="<?php echo $namebt ?>" class="btn btn-large btn-primary">
    </div>    
</form>

<script>
    ('#form').submit(function(){
    var titre = $('#titre').val();
    var texte = $('#texte').val();
    if(!titre.length || !texte.length) 
    {
        console.log('champs non rempli');
        return false;
    }
    return true;
    });
</script>

<?php
echo '</div>';


require_once('include/bas.inc.php');
require_once('include/connexion.inc.php');

if (!empty($_POST) && !empty($_POST['bt'])) {
    $titre = mysql_real_escape_string($_POST['titre']);
    $content = mysql_real_escape_string($_POST['texte']);
    $tag = $_POST['tag'];
    
    if ($_POST['modif'] == 1) {
        $id = (int) $_POST['id'];
        $sql = "UPDATE article SET Titre='$titre', Texte='$content' WHERE Id=$id";
        requete_notif($sql,'article','modifié');
    } 
    else {
        $date = mysql_real_escape_string(time());
        
        $sqltag = "SELECT Id FROM tags WHERE Nom = '$tag'";
        $reqtag = mysql_query($sqltag);
        $row = mysql_numrows($reqtag);
        if (mysql_numrows($reqtag) == 1)
        {
           $idtag = mysql_result($reqtag, 0, 0);
        }
        else 
        { 
           $sqlinserttag = "INSERT INTO tags (Nom) VALUES ('$tag')";
           $reqinserttag = mysql_query($sqlinserttag);
           $idtag = mysql_insert_id();
        }

        $idtag = (int) $idtag;
           
           
        $sql = "INSERT INTO article(Titre, Texte, Date, Tag) VALUES('$titre','$content','$date','$idtag')";   //a la plac e de date UNIX_TIMSTAMP()
        requete_notif($sql,'article','ajouté');
        
     }    
        header('location: index.php');
        exit;
   
}
 