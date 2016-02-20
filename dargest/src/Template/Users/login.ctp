<?php $this->layout = 'login'; ?>
<div class="container">
	<?php echo $this->Form->create('utilisateur',array('type' => 'file','class'=>'form-signin','inputDefaults' => array ('label' =>false)));?>
	
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
			<?php
			
			echo $this->Form->input ( 'password', array (
					'type' => 'password',
					'class' => 'form-control',
					'placeholder' => 'mot de passe',
					'autofocus' => '',
					'label' => false 
			) );
			?>
			
		<?php $options = array('label' => 'Ajouter', 'class' => 'btn btn-primary','data-loading-text'=>'Ajout en cours');?>
		<?php echo $this->Form->button("S'authentifiez-vous", $options); ?>
		<?php echo $this->Form->end()?>




</div>
