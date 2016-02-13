<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend>
		<?php echo __('Ajouter un nouveau utilisateur'); ?>
		</legend>
		<?php echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('refog');
		echo $this->Form->input('mail',array('type' => 'email'));
		echo $this->Form->input('role', array(
            'options' => array('CP' => 'CP', 'AD' => 'AD')
		));

		?>
	</fieldset>
	<?php
	$options = array('label' => 'Ajouter', 'class' => 'btn btn-primary','data-loading-text'=>'Ajout en cours');?>
	<?php echo $this->Form->end($options);?>
</div>
