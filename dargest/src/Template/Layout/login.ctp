<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset()?>
    <meta name="viewport"
	content="width=device-width, initial-scale=1.0">
<title>DarGest | Authentification</title>
    <?= $this->Html->meta('icon')?>
    <?= $this->Html->css('signin.css')?>
    <?= $this->Html->css('bootstrap.min.css')?>
    <?= $this->fetch('meta')?>
    <?= $this->fetch('css')?>
    <?= $this->fetch('script')?>
</head>
<body>
	<div class="container">
		<div class=".col-md-6">
			<div class="jumbotron">
				<h1>DarGest</h1>
				<p class="lead">Gérer votre ménage Efficacement</p>
			</div>
		</div>
		<div class=".col-md-4">
			<section class="container clearfix">
        <?= $this->fetch('content')?>
    </section>
		</div>
	</div>
</body>
</html>
