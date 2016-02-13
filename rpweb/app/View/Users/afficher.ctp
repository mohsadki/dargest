<div class="page-header">
	<h1>
	<?php echo $users['User']['nom'].' '.$users['User']['prenom']; ?>
		<small><?php echo $users['Fonction']['libelle']; ?> </small>
	</h1>
</div>
<div class="col-md-5">
<center><?php echo $this->Html->image('p/'.$users['User']['idphoto'].'.jpg', array('class' => 'img-rounded'));?></center>
</div>
<div class="col-md-6">
	<blockquote>
		<table>
			<tr>
				<td><strong>Statut du compte</strong></td>
				<td>:</td>
				<td><?php if (!$users['User']['idstatut']==0) {
					echo '<span class="label label-success">Actif</span>';
				}else echo '<span class="label label-default">Inactif</span>' ; ?></td>
			</tr>
			<tr>
				<td><strong>Nom</strong></td>
				<td>:</td>
				<td><?php echo $users['User']['nom']; ?></td>
			</tr>
			<tr>
				<td><strong>Prénom</strong></td>
				<td>:</td>
				<td><?php echo $users['User']['prenom']; ?></td>
			</tr>
			<tr>
				<td><strong>Login</strong></td>
				<td>:</td>
				<td><?php echo $users['User']['username']; ?></td>
			</tr>
			<tr>
				<td><strong>Adresse mail</strong></td>
				<td>:</td>
				<td><?php echo $this->Html->link($users['User']['mail'], 'mailto:'.$users['User']['mail']); ?>
				</td>
			</tr>
			<tr>
				<td><strong>Date intégration</strong></td>
				<td>:</td>
				<td><?php echo $users['User']['dateintegration']; ?></td>
			</tr>
			<tr>
				<td><strong>Fonction</strong></td>
				<td>:</td>
				<td><?php echo $users['Fonction']['libelle']; ?></td>
			</tr>
		</table>
	</blockquote>
</div>

