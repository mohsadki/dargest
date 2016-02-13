<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RPWeb | <?php echo $title_for_layout; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<?php echo $this->Html->css('bootstrap');?>
</head>
<body>
	<div class="container">
		<div class="col-md-7">
			<br> <br> <br> <br> <?php echo $this->Html->image('Restart.png'); ?>
		</div>
		<div class="col-md-7">
			
			<h3>Un seul compte pour acc&eacute;der &agrave; tous les services</h3>
			<blockquote>Acc&eacute;dez &agrave; toutes les applications avec un
				seul et unique mot de passe</blockquote>
			<h3>Une application d&eacute;di&eacute; au gestion des utilisateurs</h3>
			<blockquote>Grace &agrave; RPWeb vous pouvez g&eacute;rer le
				r&eacute;f&eacute;rentiel des personnes</blockquote>

		</div>
		<div class="col-md-4">
		<?php echo $this->fetch('content'); ?>
		</div>

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
