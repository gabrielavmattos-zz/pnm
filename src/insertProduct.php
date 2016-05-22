<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title> Inserir Mercadoria </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<!-- bootstrap -->

		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script  src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


		<style>
			/* Remove the navbar's default margin-bottom and rounded borders */ 
			.navbar {
				margin-bottom: 0;
				border-radius: 0;
			}

			/* Set height of the grid so .sidenav can be 100% (adjust as needed) */
			.row.content {height: 450px}

			/* Set gray background color and 100% height */
			.sidenav {
				padding-top: 20px;
				background-color: #f1f1f1;
				height: 100%;
			}

			/* Set black background color, white text and some padding */
			footer {
				background-color: #555;
				color: white;
				padding: 5px;
			}

			.jumbotron {
				margin-bottom: 0;
			}

			.msg-erro{ 
				color: red; 
				font-size: 12px;
			}

			/* On small screens, set height to 'auto' for sidenav and grid */
			@media screen and (max-width: 767px) {
				.sidenav {
					height: auto;
					padding: 15px;
				}
				.row.content {height:auto;} 
			}
		</style>
	</head>

	<body>

		<div class="jumbotron">
			<div class="container text-center">
		 	 	<h2>Plataforma de Negociação de Mercadorias</h2>
			</div> 
		</div>

		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>                        
					</button>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li><a href="index.html">Home</a></li>
						<li class="active"><a href="#insertProduct">Inserir Mercadoria</a></li>
						<li><a href="listProduct.html">Listar Mercadorias</a></li>
					</ul>
				</div>
			</div>
		
			</div>

		</nav>
		<?php
			$host = 'localhost';
			$user = 'root';
			$pass = '';
			$dbName = 'product';

			$conexao = mysqli_connect($host, $user, $pass) or die(mysql_error());
			$db1 = mysqli_select_db($conexao, $dbName) or die(mysql_error());
		?>


		<?php
	
			$id = $_POST['id'];
			$type = $_POST['type'];
			$name = $_POST['nameP'];
			$quantity = $_POST['quantity'];
			$price = $_POST['price'];
			$typeBusiness = $_POST['typeBusiness'];

			$sql = mysqli_query($conexao, "INSERT INTO Product (id, typeP, nameP, quantity, price, typeBusiness) VALUES ('$id', '$type', '$name', '$quantity', '$price', '$typeBusiness')");

			if ($sql)
			{
				echo "Ok!";
			}
			else
				echo "error";


	
		?>			

	</body>
</html>
