<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="Monep app">
<meta name="author" content="Seddik Mohamed">
<link rel="icon" href="favicon.ico">
<?php $title = 'Authentification' ;?>
<title>Monep | <?= $this->fetch('title') ?>
</title>

<!-- Bootstrap core CSS -->
<link href="/monep/css/bootstrap.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="signin.css" rel="stylesheet">

<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="../../assets/js/ie-emulation-modes-warning.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
	<!-- Begin page content -->
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-8">
			<div id="container">
				<div id="header">
					<h6></h6>
				</div>
				<div id="content">

				<?= $this->fetch('content') ?>
				</div>
				<div id="footer">
					<h6></h6>
				</div>
			</div>
		</div>
	</div>

	<!-- /.container -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<!-- https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js -->
	<script src="/monep/js/jquery.js"></script>
	<script src="/monep/js/bootstrap.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
