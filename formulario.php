<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <title>Diamond Bank</title>

    
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    
    <link href="css/style.css" rel="stylesheet">
	
</head>
<body id="page-top" class="index">

	<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top" style="background-color: black">
        <div class="container">
            
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Diamond Bank</a>
            </div>

            
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#">Acesso Restrito</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Atendimento</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="formulario.php">Acesso a Conta</a>
                    </li>
                    
                </ul>
            </div>
            
        </div>
        
    </nav>
<br/><br/><br/>


	<div class="container"><br/><br/><br/>
	<form action="extrato.php" method="get">
			<input type="hidden" name="id">
			<button class="btn btn-success" >Extrato</button>
	</form>
	<form action="sacar.php" method="get">
			<input type="hidden" name="id">
			<button class="btn btn-success">Sacar</button>
	</form>
	<form action="depositar.php" method="get">
			<input type="hidden" name="id">
			<button class="btn btn-success" >Depositar</button>
	</form>
	<form action="transferencia.php" method="get">
			<input type="hidden" name="id">
			<button class="btn btn-success">Transferência</button>
	</form>
	<form action="sair.php" method="get">
			<input type="hidden" name="id">
			<button class="btn btn-success">Sair</button>
	</form>
	</div>


<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Todos os direitos reservados &copy; Diamond Bank 2017</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="https://twitter.com/DiammondBank" target="_blank"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/diammondbank/" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="https://www.linkedin.com/in/diamond-bank-1a0a22140/" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                
            </div>
        </div>
    </footer>
</body>
	<script src="js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</html>