<div class="container">
    	<h1 class="jumbotron">    Connexion</h1>

	<!--Afficher les billets-->
	<div class="row">
		<!-- Formulaire de connexion-->
<form action="admin.php" method="post" class="col-md-6" id="connexion" novalidate="novalidate">
	<h2>Connexion</h2>

	<div class="form-group">
		<input type="text" placeholder="Nom" id="nom" name="nom" class="form-control" required="" aria-required="true">
	</div>
	<div class="form-group">
		<input type="password" placeholder="Mot de passe" id="password" name="mot_de_passe" class="form-control" required="" minlength="2" aria-required="true">
	</div>
	<div class="form-group right">
		<input type="submit" value="Connexion" class="btn btn-default">
	</div>
</form>

	</div>

<?php $content = ob_get_clean(); ?>

<?php require('App/Frontend/Templates/template.php'); ?>
    
