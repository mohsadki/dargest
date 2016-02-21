<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset()?>
    <meta name="viewport"
	content="width=device-width, initial-scale=1.0">
<title>DarGest | <?php echo $title; ?></title>
    <?= $this->Html->meta('icon')?>
    <?= $this->Html->css('bootstrap.min.css')?>

    <?= $this->fetch('meta')?>
    <?= $this->fetch('css')?>
    <?= $this->fetch('script')?>
</head>
<body>
	<!-- Fixed navbar -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#navbar" aria-expanded="false"
					aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/dargest">Dargest</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="/dargest/stats/index">Tableau de bord</a></li>
					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown" role="button" aria-haspopup="true"
						aria-expanded="false">Factures <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="/dargest/factures/ajouter">Ajouter une nouvelle
									facture</a></li>
							<li><a href="/dargest/factures/lister">Liste des facture</a></li>
						</ul></li>
					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown" role="button" aria-haspopup="true"
						aria-expanded="false">Dépenses <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="/dargest/depenses/ajouter">Ajouter une nouvelle
									dépense</a></li>
							<li><a href="/dargest/depenses/lister">Liste des dépenses</a></li>
						</ul></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown"><a href="#"
						class="dropdown-toggle btn btn-info" data-toggle="dropdown">
							<?php $session = $this->request->session(); echo '<b>'.$session->read('Auth.User.prenom').'</b>'.' ['.$session->read('Auth.User.username').']'; ?><b
							class="caret"></b>
					</a>
						<ul class="dropdown-menu">
							<li><?php
							
							echo $this->Html->link ( 'Modifier profil', array (
									'controller' => 'users',
									'action' => 'modifier/' . $session->read ( 'Auth.User.id' ) 
							) );
							?>
								</li>
							<li><a href="/dargest/users/logout">d&eacute;connexion</a></li>
						</ul></li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</nav>
	<div class="container">
		<!-- /container -->
		<br> <br> <br>
		<?= $this->Flash->render()?>
		<?= $this->fetch('content')?>
	</div>
	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="/dargest/js/jquery.min.js" type="text/javascript"></script>
	<script src="/dargest/js/jquery-ui.js" type="text/javascript"></script>
	<script src="/dargest/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="/dargest/js/bootstrap-datepicker.js" type="text/javascript"></script>
	<script src="/dargest/js/bootstrap-datepicker.fr.min.js" type="text/javascript"></script>
	<script src="/dargest/js/datepicker.js" type="text/javascript"></script>
</body>
</html>
