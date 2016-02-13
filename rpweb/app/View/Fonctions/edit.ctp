<div class="col-md-2"></div>
<div class="col-md-7">
<?php echo $this->Form->create('Fonction',array('class'=>'form-signin','inputDefaults' => array ('label' =>false)));?>
	<fieldset>
		<legend>
		<?php echo __('Modifier la fonction'); ?>
		</legend>
		<?php // echo $this->Session->flash(); ?>
		<?php echo $this->Form->input('libelle',array('class' => 'form-control','placeholder' => 'Libellé','autofocus'=>'','required'=>'required'));?>
	</fieldset>
	<br>
	<?php
	$options = array('label' => 'Modifier', 'class' => 'btn btn-primary','data-loading-text'=>'modification en cours');?>
	<?php echo $this->Form->end($options);?>
</div>
<div class="col-md-2"></div>
