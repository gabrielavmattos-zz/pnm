<html>

	<head>
		<title> Plataforma de Negociação de Mercadorias </title>
	</head>

	<body>
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
			$name = $_POST['name'];
			$quantity = $_POST['quantity'];
			$price = $_POST['price'];
			$typeBusiness = $_POST['typeBusiness'];

			$sql = mysqli_query($conexao, "INSERT INTO Product (id, typeP, nameP, quantity, price, typeBusiness) VALUES ('$id', '$type', '$name', '$quantity', '$price', '$typeBusiness')");


	
		?>			

	</body>
</html>
