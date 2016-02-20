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
    <?= $this->Flash->render()?>
    <section class="container clearfix">
        <?= $this->fetch('content')?>
    </section>
	<footer> </footer>
</body>
</html>
