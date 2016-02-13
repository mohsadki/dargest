<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<?php echo $this->Html->meta('icon'); ?>

<title>RPWeb | <?php echo $title_for_layout; ?></title>

<!-- Bootstrap core CSS -->
<?php echo $this->Html->css('bootstrap');?>
<!-- Custom styles for this template -->
<?php echo $this->Html->css('navbar-fixed-top');?>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/rpweb"><?php echo $this->Html->image('glyphicons_020_home.png'); ?>
					RPWeb</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown"><?php echo $this->Html->image('glyphicons_043_group.png'); ?>
							Gérer utilisateurs <b class="caret"></b> </a>
						<ul class="dropdown-menu">
							<li><a href="/rpweb/users/lister"><small>La liste des
										utilisateurs</small> </a></li>
							<li><a href="/rpweb/users/add"><small>Ajouter un nouveau
										utilisateur</small> </a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown"><?php echo $this->Html->image('glyphicons_324_tie.png'); ?>
							Gérer fonctions <b class="caret"></b> </a>
						<ul class="dropdown-menu">
							<li><a href="/rpweb/fonctions/lister"><small>La liste des
										fonctions</small> </a></li>
							<li><a href="/rpweb/fonctions/add"><small>Ajouter une nouvelle
										fonction</small> </a></li>
						</ul>
					</li>
					<li><a href="/rpweb/Aide"><?php echo $this->Html->image('glyphicons_196_circle_exclamation_mark.png'); ?>
							Aide</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown"><a href="#"
						class="dropdown-toggle btn btn-info" data-toggle="dropdown"><?php echo $this->Html->image('glyphicons_003_user.png'); ?>
						<?php echo AuthComponent::user('username').'('.AuthComponent::user('mail').')';?><b
							class="caret"></b> </a>
						<ul class="dropdown-menu">
							<li><a href="/rpweb/users/lister"><?php echo $this->Html->link('Modifier profil',
							array('controller' => 'users', 'action' => 'edit/'.AuthComponent::user('id'))); ?>
							</a></li>
							<li><a href="/rpweb/users/logout">d&eacute;connexion</a></li>
						</ul>
					</li>

				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>

	<div class="container">
		<div class="col-md-1"></div>
		<div class="col-md-9" role="main">
		<?php echo $this->fetch('content'); ?>
		</div>
	</div>
	<!-- /container -->


	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<?php  echo $this->Html->script('jquery');?>
	<?php // echo $this->Html->script('affix');?>
	<?php // echo $this->Html->script('alert');?>
	<?php  echo $this->Html->script('bootstrap');?>
	<?php // echo $this->Html->script('button');?>
	<?php // echo $this->Html->script('carousel');?>
	<?php // echo $this->Html->script('collapse');?>
	<?php // echo $this->Html->script('dropdown');?>
	<?php // echo $this->Html->script('modal');?>
	<?php // echo $this->Html->script('popover');?>
	<?php // echo $this->Html->script('scrollspy');?>
	<?php // echo $this->Html->script('tab');?>
	<?php // echo $this->Html->script('tooltip');?>
	<?php // echo $this->Html->script('transition');?>

</body>
</html>
