<?php
class Product {

	private $id;
	private $typeP;
	private $nameP;
	private $quantity;
	private $price;
	private $typeBusiness;
	

	public $host = "localhost";
	public $userH = "root";
	public $pass = "root";
	public $dbName = "product";

	public function setId($id) {
		$this->id = $id;
	}
	
	public function getId() {
		return $this->id;
	}

	public function setType($Type) {
		$this->typeP = $Type;
	}

	public function getType() {
 		return $this->typeP;
	}

	public function setName($Name) {
		$this->nameP = $Name;
	}
	
	public function getName() {
		return $this->nameP;
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
		$this->typeBusiness = $TypeBusiness;
	}
	
	public function getTypeBusiness() {
		return $this->TypeBusiness;
	}
	
	public function save()	{
		$mysqli = new mysqli($this->host, $this->userH, $this->pass, $this->dbName);
	
		if ($mysqli->connect_errno) {
 			echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}

		return $mysqli->query("INSERT INTO Product (id, typeP, nameP, quantity, price, typeBusiness) VALUES ('$this->id', '$this->typeP', '$this->nameP', '$this->quantity', '$this->price', '$this->typeBusiness')");
		
	}

	public function listAll() {

                $mysqli = new mysqli($this->host, $this->userH, $this->pass, $this->dbName);
	

		$query = "SELECT id, typeP, nameP, quantity, price, typeBusiness FROM Product ORDER BY id"; 	
		$consult = $mysqli->query($query);
		
		
		$products = array();
		$i = 0;

		while($row = $consult->fetch_assoc()) {
   			 $products[$i] = $row;
			 $i = $i + 1;
		}


		$mysqli->close();
		return $products;	

	}
}

