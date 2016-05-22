<?php
class Product {

	private $id;
	private $type;
	private $name;
	private $quantity;
	private $price;
	private $typeBusiness;

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
		$host = 'localhost';
		$user = 'root';
		$pass = '';
		$dbName = 'product';


		$link = mysqli_connect($host, $user, $pass) or die(mysql_error());
		$db1 = mysqli_select_db($link, $dbName) or die(mysql_error());

		return mysqli_query($link, "INSERT INTO Product (id, typeP, nameP, quantity, price, typeBusiness) VALUES ('$this->id', '$this->type', '$this->name', '$this->quantity', '$this->price', '$this->typeBusiness')");
		
	}

	public function listAll() {

	
		$consult = mysqli_query($link, "SELECT * FROM Product");
		$numConsult = mysqli_num_fields($consult);
		$valuesConsult = mysqli_fetch_array($consult);

		return $valuesConsult;	

	}
}
?>
