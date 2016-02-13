<?php $this->layout = 'authentification'; ?>
<div class="page-header">
	<h1>
		Monep <small>la gestion des marchés de l'Onep</small>
	</h1>
</div>
<div class="container col-md-6"></div>
<div class="container col-md-4">

	<span style="color: #DF0101"> <?php echo $this->Flash->render() ?> </span>
	<h5 class="form-signin-heading">Connectez-vous pour accéder à
		l'application</h5>
		<?php echo $this->Form->create('utilisateur',array('type' => 'file','class'=>'form-signin','inputDefaults' => array ('label' =>false)));?>
	<fieldset>
	<?php echo $this->Form->input('username',array('class' => 'form-control','placeholder' => 'nom','autofocus'=>'','label' =>false,'maxlength'=>'50','required' =>''));?>
	<?php echo $this->Form->input('password',array('type' => 'password','class' => 'form-control','placeholder' => 'mot de passe','autofocus'=>'','label' =>false));?>
		<br>
	</fieldset>
	<?php $options = array('label' => "S'autentifier", 'class' => 'btn btn-primary','data-loading-text'=>'connection en cours');?>
	<?php echo $this->Form->button("Se connecter", $options); ?>
	<?php echo $this->Form->end() ?>
</div>
