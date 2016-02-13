<div class="alert alert-danger">
<?php echo $this->Session->flash();  ?>
<?php $this->log($this->Session->flash()); ?>
</div>
<?php $this->layout = 'login'; ?>
<?php echo $this->Form->create('User',array('class'=>'form-signin','inputDefaults' => array ('label' =>false)));?>
<fieldset>
	<legend>
	<?php echo __('Identifiez vous'); ?>
	</legend>
	<?php echo $this->Form->input('username',
	array('class' => 'form-control','placeholder' => 'login','autofocus'=>'')); ?>
	<br>
	<?php echo $this->Form->input('password',
	array('class' => 'form-control','placeholder' => 'mot de passe','autofocus'=>''));	?>
	<br>
	<center>
	<?php $options = array('label' => 'Connexion', 'class' => 'btn btn-primary','data-loading-text'=>'Connexion en cours');?>
	</center>
	<?php echo $this->Form->end($options);?>
</fieldset>

