<?php
require_once('include/connexion.inc.php');
require_once('include/fonction.inc.php');
require_once('include/haut.inc.php');

?>

<h2> Connexion</h2>
<p>Saisissez les identifiants choisis lors de votre inscription</p>

<form action="connexion.php" method="POST" id="form_connexion">
    <fieldset>
        <div class="clearfix">
            <label for="email">Email :</label>
            <div class="input"><input id="email" name="email" size="30" type="email" value="" /></div>
        </div>
        <div class="clearfix">
            <label for="mdp">Mot de Passe :</label>
            <div class="input"><input id="mdp" name="mdp" size="30" type="password" /></div>
        </div>
        <div class="form-actions">
            <input class="btn btn-large btn-primary" id="submit" type="submit" value="Se Connecter"/>
        </div>
    </fieldset>
</form>

<?php
if(var_post("email") && var_post("mdp"))
{
    $email = mysql_real_escape_string(var_post('email'));
    $mdp = mysql_real_escape_string(var_post('mdp'));
    
    $sql = "SELECT id,email FROM utilisateurs WHERE email='".$email."' AND mdp='".$mdp."' ";
    
    
    if($data = mysql_fetch_array(mysql_query($sql)))
    {
        
        $sid = md5($data['email'].time());
        $id = $data["id"];
        $sql = "UPDATE utilisateurs SET sid='".$sid."' WHERE id=$id AND email='".$email."'"; 
        if(mysql_query($sql))
        {
           
            setcookie('sid',$sid,time()+3600);
            $_SESSION['article']= 'co';
            header('location: index.php');
        }
        
    }
    else
    {
        $_SESSION['article']= 'erreur';
        header('location: index.php');
    }
}
require_once('include/bas.inc.php');
    ?>

