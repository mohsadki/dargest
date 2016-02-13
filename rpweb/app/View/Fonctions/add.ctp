<div class="col-md-2"></div>
<div class="col-md-7">
<?php echo $this->Form->create('Fonction',array('class'=>'form','inputDefaults' => array ('label' =>false)));?>
	<fieldset>
		<legend>
		<?php echo __('Ajouter une nouvelle fonction'); ?>
		</legend>
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->Form->input('libelle',array('class' => 'form-control','placeholder' => 'Libellé','autofocus'=>'','required'=>'required'));?>
	</fieldset>
	<br>
	<?php
	$options = array('label' => 'Ajouter', 'class' => 'btn btn-primary','data-loading-text'=>'modification en cours');?>
	<?php echo $this->Form->end($options);?>
</div>
<div class="col-md-2"></div>
