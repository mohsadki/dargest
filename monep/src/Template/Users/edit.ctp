<?php $this->layout = 'default'; ?>
<div class="panel panel-default">
	<div class="panel-heading">Modifier les informations de l'utilisateur</div>
	<div class="panel-body">
	<?php echo $this->Form->create('User',array('type' => 'file','class'=>'form-signin'));?>
		<fieldset>
		<?php echo $this->Form->input('username',array('class' => 'form-control','placeholder' => 'nom','autofocus'=>'','label' =>false,'maxlength'=>'50','required' =>''));?>
			<br>
			<?php echo $this->Form->input('prenom',array('class' => 'form-control','placeholder' => 'prenom','autofocus'=>'','label' =>false));?>
			<br>
			<?php echo $this->Form->input('email',array('type' => 'email','class' => 'form-control','placeholder' => 'adresse mail','label' =>false));?>
			<br>
			<?php echo $this->Form->input('password',array('type' => 'password','class' => 'form-control','placeholder' => 'mot de passe','autofocus'=>'','label' =>false));?>
			<br>
			<?php echo $this->Form->input('role',array('type' => 'form-contro','class' => 'form-control','placeholder' => 'role','autofocus'=>'','label' =>false));?>
			<br>
		</fieldset>
		<?php $options = array('label' => 'Ajouter', 'class' => 'btn btn-primary','data-loading-text'=>'Modification en cours');?>
		<?php echo $this->Form->button('Modifier', $options); ?>
		<?php echo $this->Form->end() ?>
	</div>
</div>
