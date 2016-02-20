<?php $this->layout = 'default'; ?>
<div class="panel panel-default">
	<div class="panel-heading">Ajouter un nouvel utilisateur</div>
	<div class="panel-body">
	<?php
	
echo $this->Form->create ( 'utilisateur', array (
			'type' => 'file',
			'class' => 'form-signin',
			'inputDefaults' => array (
					'label' => false 
			) 
	) );
	?>
		<fieldset>
		<?php
		
		echo $this->Form->input ( 'username', array (
				'class' => 'form-control',
				'placeholder' => 'Email',
				'autofocus' => '',
				'label' => false,
				'maxlength' => '50',
				'required' => '' 
		) );
		?>
			<br>
			<?php
			
			echo $this->Form->input ( 'password', array (
					'type' => 'password',
					'class' => 'form-control',
					'placeholder' => 'mot de passe',
					'autofocus' => '',
					'label' => false 
			) );
			?>
			<br>
			<?php
			
			echo $this->Form->input ( 'prenom', array (
					'class' => 'form-control',
					'placeholder' => 'prenom',
					'autofocus' => '',
					'label' => false 
			) );
			?>
			<br>
		</fieldset>
		<?php $options = array('label' => 'Ajouter', 'class' => 'btn btn-primary','data-loading-text'=>'Ajout en cours');?>
		<?php echo $this->Form->button('Ajouter', $options); ?>
		<?php echo $this->Form->end()?>
	</div>
</div>
