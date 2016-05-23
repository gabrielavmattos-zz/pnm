<?php

/**
 * Description of Merchandise
 *
 * @author gabriela
 */

require_once 'model/Product.php';

class ProductController {


	public function insertProduct() {
		
		$product = new Product();
		
		$product->setId($_POST['id']);
		$product->setType($_POST['type']);
		$product->setName($_POST['nameP']);
		$product->setQuantity($_POST['quantity']);
		$product->setPrice($_POST['price']);
		$product->setTypeBusiness($_POST['typeBusiness']);
		
		return $product->save();

	}

	public function listProducts() {
		$product = new Product();
		$products = $product->listAll();

		return $products;
		
	}
}

?>

