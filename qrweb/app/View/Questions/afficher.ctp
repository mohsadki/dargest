<?php // debug($questions);?>
<fieldset>
	<legend>
		<h3>
		<?php
		switch ($questions['Question']['severite']) {
			case 0:
				echo '<span class="label label-important">Bloquante</span>';
				break;
			case 1:
				echo '<span class="label label-warning">Urgente</span>';
				break;
			case 2:
				echo '<span class="label label-info">Mineure</span>';
				break;
		}
		?>
			<small><?php echo date('Y-m-d H:i',strtotime($questions['Question']['datecreation']));?> </small>
			<br>
			<?php echo $questions['Question']['sujet'];?>
		</h3>
	</legend>
	<blockquote>
		<p>
		<?php echo $questions['Question']['contenu'];?>
		</p>
	</blockquote>
</fieldset>
<br>
<br>
<div class="bs-example">
	<dl>
		<dt>Description lists <small><?php echo date('Y-m-d H:i',strtotime($questions['Question']['datecreation']));?></small> </dt>
		<dd>A description list is perfect for defining terms.</dd>
	</dl>
</div>
