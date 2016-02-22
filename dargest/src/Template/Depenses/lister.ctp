<div class="page-header">
	<h3>
		Gestion des dépenses <small>La liste des dépenses</small>
	</h3>
</div>

<table class="table table-condensed table-hover">
	<thead>
		<tr>
			<th><?php echo $this->Paginator->sort('id', 'id');?></th>
			<th><?php echo $this->Paginator->sort('description', 'Description');?></th>
			<th><?php echo $this->Paginator->sort('type', 'Type');?></th>
			<th><?php echo $this->Paginator->sort('date_paiement', 'Date de paiement');?></th>
			<th><?php echo $this->Paginator->sort('methode_paiement', 'Méthode de paiement');?></th>
			<th><?php echo $this->Paginator->sort('montant_depense', 'Montant');?></th>
			<th><?php echo $this->Paginator->sort('commentaire', 'Commentaire');?></th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($depenses as $depense):?>
		<tr>
			<td><?php echo $this->Html->link($depense->id,array('controller' => 'depenses', 'action' => 'afficher/'.$depense->id)); ?></td>
			<td><?php echo $depense->description; ?></td>
			<td><?php echo $depense->type; ?></td>
			<td><?php echo $depense->date_paiement; ?></td>
			<td><?php echo $depense->methode_paiement; ?></td>
			<td><?php echo $depense->montant_depense; ?></td>
			<td><?php echo $depense->commentaire; ?></td>

			<td>
				<div class="btn-group">
					<button type="button"
								class="btn btn-default btn-xs dropdown-toggle"
								data-toggle="dropdown">
								Action <span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><?php echo $this->Html->link('Modifier',
								array('controller' => 'depenses', 'action' => 'modifier/'.$depense->id)); ?>
								</li>
								<li><?php echo $this->Html->link('Supprimer',
								array('controller' => 'depenses', 'action' => 'supprimer/'.$depense->id)); ?>
						</ul>
				</div>
			</td>

		</tr>

	<?php endforeach; ?>
	<?php unset($depenses); ?>
	</tbody>
</table>
<nav>
	<ul class="pagination">
		<?php echo $this->Paginator->numbers(array('first' => 'Première page'));?>
		</ul>
</nav>