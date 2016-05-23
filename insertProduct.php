<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title> Inserir Mercadoria </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<!-- bootstrap -->

		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
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
				height: 100px;
				text-align: center;
				margin: 0;
				padding-top: 10px;	
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
						<li class="active"><a href="insertProduct.php">Inserir Mercadoria</a></li>
						<li><a href="listProduct.php">Listar Mercadorias</a></li>
					</ul>
				</div>
			</div>
		
		</nav>


		<div class="container" >
			<br /> <br />

		  	<form class = "form-horizontal" id = "formProduct" method = "post">
				<div class = "form-group">
					<label class = "control-label col-sm-2" for="id"> Código: </label>
					<div class="col-sm-2"> <input type = "text" id = "id" name  = "id" /> </div>
					<div class="col-sm-4"><span class='msg-erro msg-id'></span></div>		      
				</div>

				<div class = "form-group">
					<label class = "control-label col-sm-2" for="type"> Tipo: </label>
					<div class="col-sm-2"> <input type = "text" id = "type" name = "type" /> </div>
					<div class="col-sm-6"><span class='msg-erro msg-type'></span></div>
				</div>

				<div class = "form-group">
					<label class = "control-label col-sm-2" for="nameP"> Nome: </label>
					<div class="col-sm-2"> <input type = "text" id = "nameP" name = "nameP" /> </div>
					<div class="col-sm-6"><span class='msg-erro msg-name'></span></div>
				</div>

				<div class = "form-group">	
					<label class = "control-label col-sm-2" for="quantity"> Quantidade: </label>
					<div class="col-sm-2"> <input type = "text" id = "quantity" name = "quantity"  /> </div>
					<div class="col-sm-6"><span class='msg-erro msg-quantity'></span></div>
				</div>

				<div class = "form-group">
					<label class = "control-label col-sm-2" for="price">  Preço: </label>
					<div class="col-sm-2"> <input type = "text" id = "price"  name = "price" /> </div>
					<div class="col-sm-6"><span class='msg-erro msg-price'></span></div>
				</div>

				<label class = "control-label col-sm-2" for="typeBusiness">  Tipo de negócio: </label>
					<label class="radio-inline"> <input type = "radio" id = "typeBusiness" name = "typeBusiness" value = "Compra" checked/> Compra </input> </label>
					<label class="radio-inline"> <input type = "radio" id = "typeBusiness" name = "typeBusiness" value = "Venda" /> Venda </input> </label>
					
				<br /> <br />

				<div class="col-sm-offset-3 col-sm-10">
					<button type = "submit" class = "btn btn-default"> Adicionar </button>
				</div>
	
			</form>
			<br /> <br />
		</div>

		<?php
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
			require_once 'controller/ProductController.php';

			$product = new ProductController();
			$insert = $product->insertProduct();
			if ($insert)
			{
				echo '<div class="alert alert-success">';
				echo '<strong>Mercadoria adicionada com sucesso!</strong> ';
				echo '</div>';
	
			
			}
			else
			{

			
 				echo '<div class="alert alert-danger">';
    				echo '<strong>Erro!</strong> O código que você utilizou já existe no BD';
  				echo '</div>';
			}
		}
		?>

		<footer class="container-fluid text-center">
			<p> Desenvolvido por: Gabriela Mattos</p>
		</footer>


		<!-- validate form -->
		<script type = "text/javascript" src="js/validate.js"></script>
	
	</body>
</html>
