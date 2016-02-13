<?php $this->layout = 'default'; ?>
<div class="panel panel-default">
	<div class="panel-heading">Ajouter un nouveau marché</div>
	<div class="panel-body">
	<?php echo $this->Form->create('marche',array('type' => 'file','class'=>'form-horizontal','inputDefaults' => array ('label' =>false)));?>
		<fieldset>
		<?php echo $this->Form->input('reference',
		array('class' => 'form-control','placeholder' => 'référence','autofocus'=>'','label' =>'Référence','maxlength'=>'30','required' =>''));?>
			<br>
			<div class="control-group">
			<?php echo $this->Form->input('date_ordre_service',
			array('type'=>'date', 'class' => 'form-control','label' => "Date d'ordre de service : ",'autofocus'=>''));?>
				<br>
				<?php  echo $this->Form->input('source_financ',
				array('class' => 'form-control','placeholder' => 'Source financière','label' =>'Source financière'));?>
				<br>
				<?php echo $this->Form->input('categorie',
				array('class' => 'form-control','placeholder' => 'Catégorie','autofocus'=>'','label' =>'Catégorie'));?>
				<br>
				<?php echo $this->Form->input('entreprise',
				array('class' => 'form-control','placeholder' => 'Entreprise éducatrice','autofocus'=>'','label' =>'Entreprise éducatrice'));?>
				<br>
				<?php echo $this->Form->input('delai_exec',
				array('class' => 'form-control','placeholder' => "Délai d'éxecution",'autofocus'=>'','label' =>false));?>
				<br>
				<?php echo $this->Form->input('statut',
				array('class' => 'form-control','placeholder' => 'Statut','autofocus'=>'','label' =>false));?>
				<br>
			</div>
		</fieldset>
		<?php $options = array('label' => 'Ajouter', 'class' => 'btn btn-primary','data-loading-text'=>'Ajout en cours');?>
		<?php echo $this->Form->button('Ajouter', $options); ?>
		<?php echo $this->Form->end() ?>

	</div>
</div>
