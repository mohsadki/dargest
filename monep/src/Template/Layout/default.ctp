<?php
//use Cake\AuthComponent;
use Cake\Controller\AuthComponent;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="Monep app">
<meta name="author" content="Seddik Mohamed">
<link rel="icon" href="favicon.ico">
<?php $title = 'Accueil' ;?>
<title>Monep | <?php echo $title_for_layout; ?></title>

<!-- Bootstrap core CSS -->
<link href="/monep/css/bootstrap.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="/monep/css/starter-template.css" rel="stylesheet">

<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="../../assets/js/ie-emulation-modes-warning.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
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
				<a class="navbar-brand" href="/monep/accueil">Monep</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">


					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown" role="button" aria-haspopup="true"
						aria-expanded="false"><img alt=""
							src="/monep/img/glyphicons-342-briefcase.png"> Gestion des
							marchés<span class="caret"></span> </a>
						<ul class="dropdown-menu">
							<li class="dropdown-header">Suivi opérationnel</li>
							<li><a href="/monep/marches/ajouter">Ajouter un nouveau marché</a>
							</li>
							<li><a href="/monep/marches/consulter">Consulter la liste des
									marchés en cours</a></li>
							<li><a href="#">Consulter la liste des marchés achevés</a></li>
							<li role="separator" class="divider"></li>
							<li class="dropdown-header">Suivi financier</li>
							<li><a href="#">Créer un nouveau attachement</a></li>
							<li><a href="#">Consulter la liste des attachements</a></li>
							<li><a href="#">Consulter la liste des décomptes</a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown" role="button" aria-haspopup="true"
						aria-expanded="false"><img alt=""
							src="/monep/img/glyphicons-505-alert.png"> Gestion des alertes et
							problèmes<span class="caret"></span> </a>
						<ul class="dropdown-menu">
							<li><a href="#">Déclarer un nouveau problème</a></li>
							<li><a href="#">Consulter la liste des problèmes en cours</a></li>
							<li><a href="#">Consulter la liste des problèmes résolus</a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown" role="button" aria-haspopup="true"
						aria-expanded="false"><img alt=""
							src="/monep/img/glyphicons-530-list-alt.png"> Paramètres<span
							class="caret"></span> </a>
						<ul class="dropdown-menu">
							<li class="dropdown-header">Gérer les uilisateurs</li>
							<li><a href="/monep/users/ajouter">Créer un nouvel user</a></li>
							<li><a href="/monep/users/lister">Consulter la liste des users</a>
							</li>
							<li role="separator" class="divider"></li>
							<li class="dropdown-header">les autres paramètres</li>
						</ul>
					</li>
					<li><a href="/monep/aides/index"><img alt=""
							src="/monep/img/glyphicons-197-circle-exclamation-mark.png"> Aide</a>
					</li>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown"><a href="#"
							class="dropdown-toggle btn btn-info" data-toggle="dropdown"><?php echo $this->Html->image('glyphicons_003_user.png'); ?>
							<?php $session = $this->request->session(); echo '<b>'.$session->read('Auth.User.username').'</b>'.' ['.$session->read('Auth.User.email').']'; ?><b
								class="caret"></b> </a>
							<ul class="dropdown-menu">
								<li><a href="/monep/users/edit"><?php  echo $this->Html->link('Modifier profil',
								array('controller' => 'users', 'action' => 'edit/'.$session->read('Auth.User.id'))); ?>
								</a></li>
								<li><a href="/monep/users/logout">d&eacute;connexion</a></li>
							</ul>
						</li>

					</ul>
			
			</div>
			<!--/.nav-collapse -->
		</div>
	</nav>
	<!-- Begin page content -->
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-8">
			<div id="container">
				<div id="header">
					<h6></h6>
				</div>
				<div id="content">

				<?= $this->Flash->render() ?>

				<?= $this->fetch('content') ?>
				</div>
				<div id="footer">
					<h6></h6>
				</div>
			</div>
		</div>
	</div>

	<!-- /.container -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<!-- https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js -->
	<script src="/monep/js/jquery.js"></script>
	<script src="/monep/js/bootstrap.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
