<!DOCTYPE html>
<?php
	
	require_once 'model/Product.php';
	require_once 'controller/ProductController.php';
	$product = new ProductController();
	$products = $product->listProducts();
?>;

<html lang="pt">
	<head>
		<title> Plataforma de Negociação de Mercadorias </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
					<li><a href="insertProduct.php">Inserir Mercadoria</a></li>
					<li class="active"><a href="listProduct.html">Listar Mercadorias</a></li>
				</ul>
			</div>
		</div>
		
		</div>

	</nav>

	<div class="container">
		<br /> <br />
		<table class="table table-striped">
			<thead>
				<tr>
					 <th>Códido</th>
					 <th>Tipo</th>
					 <th>Nome</th>
					 <th>Quantidade</th>
					 <th>Preço</th>
					 <th>Tipo de Negócio</th>
				</tr>
			</thead>
			<tbody>
		 		<?php foreach ($products as $product): ?>
		 		<tr>
					<td> <?php echo ($product['id']); ?> </td>
					<td> <?php echo ($product['typeP']); ?> </td>
					<td> <?php echo ($product['nameP']); ?> </td>
					<td> <?php echo ($product['quantity']); ?> </td>
					<td> <?php echo ($product['price']); ?> </td>
					<td> <?php echo ($product['typeBusiness']); ?> </td>
				 </tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<br /> <br />
	
	</div>
	<footer class="container-fluid text-center">
		<p> Desenvolvido por: Gabriela Mattos</p>
	</footer>
	
</body>
</html>
