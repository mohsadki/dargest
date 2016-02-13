<?php $this->layout = 'authentification'; ?>
<div class="page-header">
	<h1>
		Monep <small>la gestion des marchés de l'Onep</small>
	</h1>
	<br>
	<?php  echo $this->Html->link('Se connecter',
	array('controller' => 'Accueil', 'action' => 'index')); ?>
</div>
