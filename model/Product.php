<?php
class Product {

	private $id;
	private $type;
	private $name;
	private $quantity;
	private $price;
	private $typeBusiness;

	public $host = '127.7.84.130';
	public $user = 'adminQe7v3zB';
	public $pass = 'YibSEj4WbkS1';
	public $dbName = 'product';

	public function setId($id) {
		$this->id = $id;
	}
	
	public function getId() {
		return $this->id;
	}

	public function setType($Type) {
		$this->type = $Type;
	}

	public function getType() {
 		return $this->type;
	}

	public function setName($Name) {
		$this->name = $Name;
	}
	
	public function getName() {
		return $this->name;
	}

	public function setQuantity($Quantity) {
		$this->quantity = $Quantity;
	}

	public function getQuantity() {
		return $this->quantity;
	}
	
	public function setPrice($Price) {
		$this->price = $Price;
	}
	
	public function getPrice() {
		return $this->price;
	}
	
	public function setTypeBusiness($TypeBusiness) {
		$this->TypeBusiness = $TypeBusiness;
	}
	
	public function getTypeBusiness() {
		return $this->TypeBusiness;
	}
	
	public function save()	{
		
	 	$link = mysqli_connect($this->host, $this->user, $this->pass) or die(mysql_error());
		$db1 = mysqli_select_db($link, $this->dbName) or die(mysql_error());

		mysqli_close($link);
		return mysqli_query($link, "INSERT INTO Product (id, typeP, nameP, quantity, price, typeBusiness) VALUES ('$this->id', '$this->type', '$this->name', '$this->quantity', '$this->price', '$this->typeBusiness')");
		
	}

	public function listAll() {

		$link = mysqli_connect($this->host, $this->user, $this->pass) or die(mysql_error());
		$db1 = mysqli_select_db($link, $this->dbName) or die(mysql_error());

		$consult = mysqli_query($link, "SELECT id, typeP, nameP, quantity, price, typeBusiness FROM Product ORDER BY id") or die(mysql_error()); 
		$num_fields = mysqli_num_fields($consult);
		
		$products = array();
		$i = 0;

		while($row = mysqli_fetch_assoc($consult)) {
			$products[$i] = $row;
			$i=$i + 1;
		}


		mysqli_free_result($consult);
		mysqli_close($link);
		return $products;	

	}
}
?>
