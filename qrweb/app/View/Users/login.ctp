
<div class="col-md-4">
<?php echo 'teeeeee';?>
</div>
<div class="col-md-7" role="main">
<?php $this->layout = 'login'; ?>
<?php echo $this->Form->create('User',array('class'=>'form-signin'));?>
<fieldset>
	<legend>
	<?php echo __('Merci de rentrer votre nom utilisateur et mot de passe'); ?>
	</legend>
	<?php echo $this->Form->input('username',array('width'=>'200px')); ?>
	<?php echo $this->Form->input('password');	?>
</fieldset>
<?php $options = array('label' => 'Connexion', 'class' => 'btn btn-primary','data-loading-text'=>'Connexion en cours');?>
<?php echo $this->Form->end($options);?>
</div>


