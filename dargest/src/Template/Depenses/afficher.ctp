<div class="page-header">
	<h3>
		Gestion des dépenses <small>détail de la dépense</small>
	</h3>
</div>
<b>Actions : </b>
<?php
echo $this->Html->link ( 'Modifier', array (
		'controller' => 'depenses',
		'action' => 'modifier/' . $Depense->id 
) );
?>
<?php

echo " | ".$this->Html->link ( 'Supprimer', array (
		'controller' => 'depenses',
		'action' => 'supprimer/' . $Depense->id 
) );
?>
<?php

echo " | ".$this->Html->link ( 'Retour à la liste des dépenses', array (
		'controller' => 'depenses',
		'action' => 'lister' 
) );
?>
<br><br><br>
<table>
	<tr>
		<td><b>Identifiant</b></td>
		<td>:</td>
		<td><?php echo $this->Html->link($Depense->id,array('controller' => 'depenses', 'action' => 'afficher/'.$Depense->id)); ?></td>
	</tr>

	<tr>
		<td><b>Description</b></td>
		<td>:</td>
		<td><?php echo $Depense->description; ?></td>
	</tr>

	<tr>
		<td><b>Type de dépense</b></td>
		<td>:</td>
		<td><?php echo $Depense->type; ?></td>
	</tr>
	<tr>
		<td><b>Date de dépense</b></td>
		<td>:</td>
		<td><?php echo $Depense->date_paiement; ?></td>
	</tr>
	<tr>
		<td><b>Méthode de paiement</b></td>
		<td>:</td>
		<td><?php echo $Depense->methode_paiement; ?></td>
	</tr>
	<tr>
		<td><b>Montant de dépense</b></td>
		<td>:</td>
		<td><?php echo $Depense->montant_depense; ?></td>
	</tr>
	<tr>
		<td><b>Commentaire sur la dépense</b></td>
		<td>:</td>
		<td><?php echo $Depense->commentaire; ?></td>
	</tr>
</table>