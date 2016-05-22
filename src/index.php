<html>

	<head>
		<title> Plataforma de Negociação de Mercadorias </title>
	</head>

	<body>
		<h1 > Plataforma de Negociação de Mercadorias </h1>

		<form name = "formProduct" method = "post" action = "">
			<table>
				<tr>
					<td> Código: </td>
					<td> <input type = "text" name = "id" /> </td>
				</tr>
				<tr>
					<td> Tipo: </td>
					<td> <input type = "text" name = "type" /> </td>
				</tr>
				<tr>
					<td> Nome: </td>
					<td> <input type = "text" name = "name" /> </td>
				</tr>
				<tr>	
					<td> Quantidade: </td>
					<td> <input type = "text" name = "quantity" /> </td>
				</tr>
				<tr>
					<td> Preço: </td>
					<td> <input type = "text" name = "price" /> </td>
				</tr>
				<tr>
					<td> Tipo de negócio: </td>
					<td> 
						<input type = "radio" name = "typeBusiness" value = "buy" /> Compra </input>  
						<input type = "radio" name = "typeBusiness" value = "sell" /> Venda </input> 
					</td>
				</tr>

			</table>
		</form>

	</body>

</html>

<!--<?php
require_once 'config.php';
?>-->
