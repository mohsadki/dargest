<?php $this->layout = 'login'; ?>

<div class="container">
	<blockquote><span style="color: #DF0101"> <?php echo $this->Flash->render() ?> </span></blockquote>
	<?php
	
	echo $this->Form->create ( 'utilisateur', array (
			'type' => 'file',
			'class' => 'form-signin',
			'inputDefaults' => array (
					'label' => false 
			) 
	) );
	?>
	
		<?php
		
		echo $this->Form->input ( 'username', array (
				'class' => 'form-control',
				'placeholder' => 'email',
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
		<?php echo $this->Form->button("S'authentifier", $options); ?>
		<?php echo $this->Form->end()?>
</div>
