<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (! Configure::read ( 'debug' )) :
	throw new NotFoundException ( 'Please replace Pages/home.ctp with your own version.' );


endif;

$cakeDescription = 'DARGest: Gérer votre ménage';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset()?>
    <meta name="viewport"
	content="width=device-width, initial-scale=1.0">
<title>
        <?= $cakeDescription?>
    </title>
    <?= $this->Html->meta('icon')?>
    <?= $this->Html->css('bootstrap.min.css')?>
</head>

<div class="container">

	<form class="form-signin">
		<h2 class="form-signin-heading">Authentifiez-vous</h2>
		<label for="inputEmail" class="sr-only">Adresse email</label> <input
			type="email" id="inputEmail" class="form-control"
			placeholder="Adresse email" required autofocus> <label
			for="inputPassword" class="sr-only">Mot de passe</label> <input
			type="password" id="inputPassword" class="form-control"
			placeholder="Mot de passe" required>
		<button class="btn btn-lg btn-primary btn-block" type="submit">S'authentifier</button>
	</form>

</div>
<!-- /container -->
<footer> </footer>
</body>
</html>
