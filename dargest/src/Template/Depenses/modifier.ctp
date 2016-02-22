<?php $this->layout = 'default'; ?>
<div class="page-header">
	<h3>
		Gestion des dépenses <small>modifier une dépense</small>
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
				'required' => true 
		) );
		?>
		<label for="type">Type de la dépense</label> <select
			class="form-control" name="type">
			<option value="">(Sélectionner)</option>
			<option value="Loyer">Loyer</option>
			<option value="Santé">Santé</option>
			<option value="Auto">Auto</option>
			<option value="Divers">Divers</option>
		</select>
		<!-- date -->
		<label for="type">Date de la dépense</label>
		<div class="input-group date" data-provide="datepicker">
			<input name="date_paiement" type="text" class="form-control"
				required><span class="input-group-addon"><i
				class="glyphicon glyphicon-th"></i></span>
		</div>
		<!-- date fin -->
		<label for="type">Type de la dépense</label> <select
			class="form-control" name="methode_paiement">
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
					'label' => 'Montant dépense',
					'required' => true 
			) );
			?>			
			<?php
			echo $this->Form->input ( 'commentaire', array (
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