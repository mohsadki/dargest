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
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#contact">Contact</a></li>
					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown" role="button" aria-haspopup="true"
						aria-expanded="false">Dropdown <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li role="separator" class="divider"></li>
							<li class="dropdown-header">Nav header</li>
							<li><a href="#">Separated link</a></li>
							<li><a href="#">One more separated link</a></li>
						</ul></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown"><a href="#"
						class="dropdown-toggle btn btn-info" data-toggle="dropdown"><?php echo $this->Html->image('glyphicons_003_user.png'); ?>
							<?php $session = $this->request->session(); echo '<b>'.$session->read('Auth.User.prenom').'</b>'.' ['.$session->read('Auth.User.username').']'; ?><b
							class="caret"></b> </a>
						<ul class="dropdown-menu">
							<li><a href="/monep/users/edit"><?php
							
							echo $this->Html->link ( 'Modifier profil', array (
									'controller' => 'users',
									'action' => 'modifier/' . $session->read ( 'Auth.User.id' ) 
							) );
							?>
								</a></li>
							<li><a href="/dargest/users/logout">d&eacute;connexion</a></li>
						</ul></li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</nav>

	<div class="container"></div>
	<!-- /container -->

<?= $this->Flash->render()?>
<?= $this->fetch('content')?>

	<footer> </footer>
	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript">window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
