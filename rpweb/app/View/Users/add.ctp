<div class="col-md-2"></div>
<div class="col-md-7">
<?php echo $this->Form->create('User',array('type' => 'file','class'=>'form-signin','inputDefaults' => array ('label' =>false)));?>
	<fieldset>
		<legend>
		<?php echo __('Ajouter un nouveau utilisateur'); ?>
		</legend>
		<?php echo $this->Form->input('nom',array('class' => 'form-control','placeholder' => 'nom','autofocus'=>''));?>
		<br>
		<?php echo $this->Form->input('prenom',array('class' => 'form-control','placeholder' => 'prenom','autofocus'=>''));?>
		<br>
		<?php echo $this->Form->input('username',array('class' => 'form-control','placeholder' => 'login','autofocus'=>''));?>
		<br>
		<?php echo $this->Form->input('password',array('class' => 'form-control','placeholder' => 'mot de passe','autofocus'=>''));?>
		<br>
		<?php echo $this->Form->input('mail',array('type' => 'email','class' => 'form-control','placeholder' => 'adresse mail'));?>
		<br>
		<?php echo $this->Form->input('idfonction', array('class' => 'form-control','options' => $fonctions));?>
		<br>
		<?php echo $this->Form->input('idstatut', array('class' => 'form-control',
            'options' => array('0' => 'Inactif', '2' => 'Active')
		));?>
		<br>
		<?php echo $this->Form->file('avatar',array('class' => 'btn btn-primary'));?>
	</fieldset>
	<br>
	<?php
	$options = array('label' => 'Ajouter', 'class' => 'btn btn-primary','data-loading-text'=>'Ajout en cours');?>
	<?php echo $this->Form->end($options);?>
</div>
<div class="col-md-2"></div>
