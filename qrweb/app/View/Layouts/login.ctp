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
	<br>
	<br>
	<br>
	<div class="container">
		<div class="alert">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong> <?php echo $this->Session->flash(); ?> <?php echo $this->Session->flash('auth'); ?>
			</strong>
		</div>
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
