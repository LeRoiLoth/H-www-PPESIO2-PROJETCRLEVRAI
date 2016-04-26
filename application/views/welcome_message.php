<!DOCTYPE html>
<html lang="fr">
    
    <head>
<?php $this->load->view('style.php')?>
    </head>
    <body>
<?php
	$this->load->helper('url');
	$path = base_url();
?>
    
    <div class="container">
<div class="row">
<div class="col-xs-12">
    
    <div class="main">
            
        <div class="row">
        <div class="col-xs-12 col-sm-6 col-sm-offset-1">
                    
            <h2>Bienvenue sur Galaxy Swiss-Bourdin !</h2><br>
            <h2>Identifiez-vous !</h2>
            
            	<?php if (isset($erreur))	echo '<div class ="erreur"><ul><li>'.$erreur.'</li></ul></div>'; ?>
                    
            <form action="<?php echo $path.'c_default/connecter';?>" name="login" role="form" class="form-horizontal" method="post" accept-charset="utf-8">
                <div class="form-group">
                <div class="col-md-8"><input name="login" placeholder="Identifiant" class="form-control" type="text" id="UserUsername"/></div>
                </div> 
                
                <div class="form-group">
                <div class="col-md-8"><input name="mdp" placeholder="Mot de passe" class="form-control" type="password" id="UserPassword"/></div>
                </div> 
                
                <div class="form-group">
                <div class="col-md-offset-0 col-md-8"><input  class="btn btn-success btn btn-success" type="submit" value="Connexion"/></div>
                </div>
            
            </form>
            
            <img src="logo.jpg" ></img>
        </div>
        </div>
        
    </div>
</div>
</div>
</div>
    </body>
</html>