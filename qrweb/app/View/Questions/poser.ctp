<h2>Poser une nouvelle question</h2>
<br>
<?php
echo $this->Form->create('Question',array('action' => 'Envoyer','inputDefaults' => array ('label' =>false),
		'class' => 'form')); 
?>
<?php echo $this->Form->input('qsujet', array('placeholder' => 'Sujet','required'=>'required')); ?>
<?php echo $this->Form->input('qseverite', array('required'=>'required','options' => array('bloquante', 'Urgente', 'Mineure'),'empty' => '(choisissez)'  )); ?>
<?php echo $this->Form->input('qcontenu',array('required'=>'required','type'=>'textarea','placeholder' =>'Question','rows'=>'10', 'cols'=>'80')); ?>
<?php
$options = array('label' => 'Envoyer', 'class' => 'btn btn-primary','data-loading-text'=>'Envoi en cours');
echo $this->Form->end($options);
?>
