
<br>
<small>
	<table class="table table-bordered table-condensed">
		<tr>
			<th><center>
			<?php echo $this->Paginator->sort('id', 'id');?>
				</center></th>
			<th><center>
			<?php echo $this->Paginator->sort('severite','severite');?>
				</center></th>
			<th><center>
			<?php echo $this->Paginator->sort('id','Demandeur');?>
				</center></th>
			<th><center>
			<?php echo $this->Paginator->sort('sujet','Sujet');?>
				</center></th>
			<th><center>
			<?php echo $this->Paginator->sort('sujet','nbr réponses');?>
				</center></th>
			<th><center>
			<?php echo $this->Paginator->sort('datecreation','Date creation');?>
				</center>
			</th>
			<th><center>
			<?php echo $this->Paginator->sort('datemaj', 'Date 1ere reponse');?>
				</center>
			</th>
			<th><center>
			<?php echo $this->Paginator->sort('dateenvoi', 'Date envoi MOE');?>
				</center>
			</th>
			<th></th>
		</tr>
		<center>
			<!-- Here is where we loop through our $posts array, printing out post info -->

		<?php foreach ($questions as $question):

		switch ($question['Question']['statut']) {
			case 0:
				echo '<tr class="error">';
				break;
			case 1:
				echo '<tr class="warning">';
				break;
			case 2:
				echo '<tr class="success">';
				break;
			case 3:
				echo '<tr class="info">';
				break;
		}

		?>
			<td><center>
			<?php echo $question['Question']['id']; ?>
				</center></td>
			<td><?php 
			switch ($question['Question']['severite']) {
				case 0:
					echo '<center><span class="label label-important">Bloquante</span></center>';
					break;
				case 1:
					echo '<center><span class="label label-warning">Urgente</span></center>';
					break;
				case 2:
					echo '<center><span class="label label-info">Mineure</span></center>';
					break;
			}
			?>
			</td>
			<td><?php echo $question['Question']['id']; ?></td>
			<td><?php echo $question['Question']['sujet']; ?></td>
			<td><center>
			<?php echo $question['Question']['nbrreponses']; ?>
				</center></td>
			<td><center>
			<?php echo date('Y-m-d H:i',strtotime($question['Question']['datecreation'])); ?>
				</center></td>
			<td><center>
			<?php if ($question['Question']['datemaj']!="0000-00-00 00:00:00")
			echo date('Y-m-d H:i',strtotime($question['Question']['datemaj'])); ?>
				</center></td>
			<td><center>
			<?php if ($question['Question']['dateenvoi']!="0000-00-00 00:00:00")
			echo date('Y-m-d H:i',strtotime($question['Question']['dateenvoi'])); ?>
				</center></td>
			<td>
				<div class="btn-group">
					<a class="btn btn-mini dropdown-toggle" data-toggle="dropdown"
						href="#"> Action <span class="caret"></span> </a>
					<ul class="dropdown-menu">
						<li><a href="#appercu" role="button" data-toggle="modal"><i
								class="icon-eye-open icon-black"></i> Appercu rapide</a>
						</li>
						<li><?php echo $this->Html->link('Afficher detail',
						array('controller' => 'questions', 'action' => 'Afficher/'.$question['Question']['id'])); ?>
						</li>
						<li><?php echo $this->Html->link('Envoyer',
						array('controller' => 'questions', 'action' => 'Repondre/'.$question['Question']['id'])); ?>
						</li>
						<li><?php echo $this->Html->link('Cloturer',
						array('controller' => 'questions', 'action' => 'Cloturer/'.$question['Question']['id'])); ?>
						</li>
					</ul>
				</div>
			</td>
			</tr>
			<?php endforeach; ?>
			<?php unset($question); ?>
	
	</table> </small>
			<?php echo $this->Paginator->numbers(array('first' => 'Première page'));?>
<!-- Button to trigger modal -->


<!-- Modal -->
<div id="appercu" class="modal hide fade" tabindex="-1" role="dialog"
	aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal"
			aria-hidden="true">X</button>
		<h3 id="myModalLabel">Question</h3>
	</div>
	<div class="modal-body">


		<blockquote>
			<p>
			<?php
			switch ($questions['Question']['severite']) {
				case 0:
					echo '<span class="label label-important">Bloquante</span>';
					break;
				case 1:
					echo '<span class="label label-warning">Urgente</span>';
					break;
				case 2:
					echo '<span class="label label-info">Mineur</span>';
					break;
			}
			?>
				<small>Date cr&eacute;ation : <?php echo $questions['Question']['datecreation'];?>
				</small>
			</p>
			<br>
			<p>
			<?php echo $questions['Question']['contenu'];?>
			</p>
		</blockquote>

	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	</div>
</div>
