<?php $this->layout = 'default'; ?>
<div class="panel panel-default">
	<div class="panel-heading">La liste des utilisateurs</div>
	<div class="panel-body">
		<table class="table table-condensed">
			<thead>
				<tr>
					<th><center>
					<?php echo $this->Paginator->sort('id', 'id');?>
						</center></th>
					<th><?php echo $this->Paginator->sort('username', 'Nom');?>
					</th>
					<th><?php echo $this->Paginator->sort('prenom', 'Prénom');?>
					</th>
					<th><?php echo $this->Paginator->sort('mail', 'Mail');?>
					</th>
					<th><?php echo $this->Paginator->sort('role', 'role');?>
					</th>
					<th><?php echo $this->Paginator->sort('statut', 'statut');?>
					</th>
					<th>
						<center></center></th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($utilisateurs as $utilisateur):?>
				<tr>
					<td><center>
					<?php echo $this->Html->link($utilisateur->id,
					array('controller' => 'users', 'action' => 'afficher/'.$utilisateur->id)); ?>
						</center></td>
					<td><?php echo $utilisateur->username; ?>
					</td>
					<td><?php echo $utilisateur->prenom; ?>
					</td>
					<td><?php echo $this->Html->link($utilisateur->email, 'mailto:'.$utilisateur->email); ?>
					</td>
					<td><?php echo $utilisateur->role; ?>
					</td>
					<td><?php if (!$utilisateur->statut==0) {
						echo '<span class="label label-success">Actif</span>';
					}else echo '<span class="label label-default">Inactif</span>' ; ?>
					</td>
					<td>
						<div class="btn-group">
							<button type="button"
								class="btn btn-default btn-xs dropdown-toggle"
								data-toggle="dropdown">
								Action <span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><?php echo $this->Html->link('Modifier',
								array('controller' => 'users', 'action' => 'edit/'.$utilisateur->id)); ?>
								</li>
								<li><?php echo $this->Html->link('Activer',
								array('controller' => 'users', 'action' => 'activer/'.$utilisateur->id)); ?>
								</li>
								<li><?php echo $this->Html->link('Désactiver',
								array('controller' => 'users', 'action' => 'desactiver/'.$utilisateur->id)); ?>
								</li>
								<li><?php echo $this->Html->link('Réinitialiser mot de passe',
								array('controller' => 'users', 'action' => 'reinitialiser/'.$utilisateur->id)); ?>
								</li>
							</ul>
						</div></td>
				
				
				<tr>
				<?php endforeach; ?>
				<?php unset($utilisateurs); ?>
			
			</tbody>
		</table>

		<nav>
		<ul class="pagination">
		<?php echo $this->Paginator->numbers(array('first' => 'Première page'));?>
		</ul>
		</nav>
	</div>
</div>
