<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>QR Web | <?php echo $title_for_layout; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<?php echo $this->Html->css('bootstrap');?>
<?php echo $this->Html->css('bootstrap-responsives');?>
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<button type="button" class="btn btn-navbar" data-toggle="collapse"
					data-target=".nav-collapse">
					<span class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="brand" href="/qrweb">QR Web</a>
				<div class="nav-collapse collapse">
					<ul class="nav">
						<li><a href="/qrweb/Questions/Poser">Poser une question</a></li>
						<li><a href="/qrweb/Questions/Consulter">Consulter les questions</a>
						</li>
						<li><a href="/qrweb/Param">Param&egrave;tres</a></li>
						<li>

							<div class="btn-group">
								<button class="btn btn-inverse">
									<?php echo AuthComponent::user('username');?> 
								</button>
								<button class="btn btn-inverse dropdown-toggle"
									data-toggle="dropdown">
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<!-- dropdown menu links -->
									<li><?php echo $this->Html->link('Modifier profil',
									array('controller' => 'users', 'action' => 'edit/'.AuthComponent::user('id'))); ?>
									</li>
									<li><a href="/qrweb/users/logout"><p class="text-error">d&eacute;connexion</p> </a></li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
				<!--/.nav-collapse -->
			</div>
		</div>
	</div>
	<!--/ des retours a ligne pour corriger le bug de l'entete -->
	<br>
	<br>
	<br>
	<br>
	<div class="container">

	<?php echo $this->Session->flash(); ?>
	<?php echo $this->fetch('content'); ?>

	</div>
	<!-- /container -->
	<!-- Le javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<?php echo $this->Html->script('jquery-1.10.2');?>
	<?php echo $this->Html->script('bootstrap-transition');?>
	<?php echo $this->Html->script('bootstrap-alert');?>
	<?php echo $this->Html->script('bootstrap-modal');?>
	<?php echo $this->Html->script('bootstrap-dropdown');?>
	<?php echo $this->Html->script('bootstrap-scrollspy');?>
	<?php echo $this->Html->script('bootstrap-tab');?>
	<?php echo $this->Html->script('bootstrap-tooltip');?>
	<?php echo $this->Html->script('bootstrap-popover');?>
	<?php echo $this->Html->script('bootstrap-button');?>
	<?php echo $this->Html->script('bootstrap-collapse');?>
	<?php echo $this->Html->script('bootstrap-carousel');?>
	<?php echo $this->Html->script('bootstrap-typeahead');?>
</body>
</html>
