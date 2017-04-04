<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Diamond Bank</title>

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="estilo.css">

  <!-- Link das fontes -->

  <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
	
</head>
<body>

	<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color:#0f4e91">
		 <div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		 <div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				</button>
				      <a class="navbar-brand" href="formulario.php">Diamond Bank
				      </a>
		 </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
		 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav navbar-right">
				        <li></li>
				      </ul>
				      
		 </div>
			 </div>
	</nav>

	<div class="container"><br/><br/><br/>
		<h2>Digite o valor a ser depositado:</h2>
		<input name="campo1"><br><br>
		<form action="#.php" method="get">
			<input type="hidden" name="id">
			<button class="btn btn-success">Depositar</button>
	</form>
	</div>

</body>
	<script src="js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</html>