<table class="table table-bordered">
	<thead>
		<tr>
			<th><center>
			<?php echo $this->Paginator->sort('id', 'id');?>
				</center></th>
			<th><center>
			<?php echo $this->Paginator->sort('nom', 'Nom');?>
				</center></th>
			<th><center>
			<?php echo $this->Paginator->sort('prenom', 'Prénom');?>
				</center></th>
			<th><center>
			<?php echo $this->Paginator->sort('username', 'Login');?>
				</center></th>
			<th><center>
			<?php echo $this->Paginator->sort('mail', 'Mail');?>
				</center></th>
			<th><center>
			<?php echo $this->Paginator->sort('id', 'Fonction');?>
				</center></th>
			<th><center>
			<?php echo $this->Paginator->sort('idstatut', 'Statut');?>
				</center></th>
			<th><center></center></th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $user):?>
		<tr>
			<td><?php echo $this->Html->link($user['User']['id'],
			array('controller' => 'users', 'action' => 'afficher/'.$user['User']['id'])); ?>
			</td>
			<td><?php echo $user['User']['nom']; ?>
			</td>
			<td><?php echo $user['User']['prenom']; ?>
			</td>
			<td><?php echo $user['User']['username']; ?>
			</td>
			<td><?php echo $this->Html->link($user['User']['mail'], 'mailto:'.$user['User']['mail']); ?>
			</td>
			<td><?php echo $user['Fonction']['libelle']; ?>
			</td>
			<td><?php if (!$user['User']['idstatut']==0) {
				echo '<span class="label label-success">Actif</span>';
			}else echo '<span class="label label-default">Inactif</span>' ; ?>
			</td>
			<td>
				<div class="btn-group">
					<button type="button" class="btn btn-default btn-xs dropdown-toggle"
						data-toggle="dropdown">
						Action <span class="caret"></span>
					</button>
					<ul class="dropdown-menu" role="menu">
						<li><?php echo $this->Html->link('Modifier',
							array('controller' => 'users', 'action' => 'edit/'.$user['User']['id'])); ?>
						</li>
						<li><?php echo $this->Html->link('Réinitialiser mot de passe',
							array('controller' => 'users', 'action' => 'edit/'.$user['User']['id'])); ?>
						</li>
						<li><a href="#">Something else here</a>
						</li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a>
						</li>
					</ul>
				</div></td>
		
		
		<tr>




		<?php endforeach; ?>
		<?php unset($user); ?>
	
	</tbody>
</table>
