<table class="table table-bordered">
	<thead>
		<tr>
			<th><center>
			<?php echo $this->Paginator->sort('id', 'id');?>
				</center>
			</th>
			<th><center>
			<?php echo $this->Paginator->sort('libelle', 'Libellé');?>
				</center>
			</th>
			<th><center></center>
			</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($fonctions as $fonction):?>
		<tr>
			<td><center><?php echo $fonction['Fonction']['id']; ?></center></td>
			<td><?php echo $fonction['Fonction']['libelle']; ?></td>
			<td>
				<div class="btn-group">
					<button type="button"
						class="btn btn-default btn-xs dropdown-toggle"
						data-toggle="dropdown">
						Action <span class="caret"></span>
					</button>
					<ul class="dropdown-menu" role="menu">
						<li><?php echo $this->Html->link('Modifier',
						array('controller' => 'fonctions', 'action' => 'edit/'.$fonction['Fonction']['id'])); ?>
						</li>
						<li><?php echo $this->Html->link('Supprimer',
						array('controller' => 'fonctions', 'action' => 'delete/'.$fonction['Fonction']['id'])); ?>
						</li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
					</ul>
				</div>
			</td>
		
		
		<tr>
		<?php endforeach; ?>
		<?php unset($user); ?>
	
	</tbody>
</table>
