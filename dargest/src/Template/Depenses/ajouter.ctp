<?php $this->layout = 'default'; ?>
<div class="page-header">
	<h3>
		Gestion des dépenses <small>ajouter une dépenses</small>
	</h3>
</div>

<div class="col-xs-4">
<?php

echo $this->Form->create ( 'depense', array (
		'type' => 'file',
		'class' => 'form-horizontal',
		'inputDefaults' => array (
				'label' => true 
		) 
) );
?>
<fieldset>
		<?php
		
		echo $this->Form->input ( 'description', array (
				'class' => 'form-control',
				'placeholder' => 'description de la dépense',
				'autofocus' => '',
				'label' => 'Description',
				'maxlength' => '50',
				'required' => '' 
		) );
		?>
		<label for="type">Type de la dépense</label> <select
			class="form-control" id="type">
			<option value="">(Sélectionner)</option>
			<option value="Loyer">Loyer</option>
			<option value="Santé">Santé</option>
			<option value="Auto">Auto</option>
			<option value="Divers">Divers</option>
		</select>
		<!-- dates -->
		<label for="type">Date de la dépense</label>
		<div class="input-group date" data-provide="datepicker">
			<input id="date_paiement" type="text" class="form-control">
			<div class="input-group-addon">
				<span class="glyphicon glyphicon-th"></span>
			</div>
		</div>
		<!-- dates fin -->

		<label for="type">Type de la dépense</label> <select
			class="form-control" id="methode_paiement">
			<option value="">(Sélectionner)</option>
			<option value="Espece">Espece</option>
			<option value="Virement">Virement</option>
			<option value="Chèque">Chèque</option>
			<option value="Internet">Internet</option>
		</select>

			
			<?php
			
			echo $this->Form->input ( 'montant_depense', array (
					'class' => 'form-control',
					'placeholder' => 'montant dépense',
					'autofocus' => '',
					'label' => 'Montant dépense' 
			) );
			?>			
			<?php
			echo $this->Form->input ( 'Commentaire', array (
					'class' => 'form-control',
					'placeholder' => 'commentaire dépense',
					'autofocus' => '',
					'label' => 'Commentaire sur la dépense' 
			) );
			?>

	</fieldset>
	<br>
<?php $options = array('label' => 'Ajouter', 'class' => 'btn btn-primary','data-loading-text'=>'Ajout en cours');?>
		<?php echo $this->Form->button('Ajouter', $options); ?>
		<?php echo $this->Form->end()?>
</div>