<?php
	interface NameInter{
		public function getName();
		public function setName($name);
	}
	class Book implements NameInter{
		private $name;
		public function getName(){
			return $this->name;
		}
		public function setName($name){
			return $this->name = $name;
		}
		/*public function __toString(){
			return "$this->name";
		}*/
	}

	$book = new Book;
	$book->setName('Andrey');
	print $book->getName();
	print '<br />';
	//---------------------------
	trait NameTrait{
		private $name;
		public function getName(){
			return $this->name;
		}
		public function setName($name){
			return $this->name = $name;
		}
		/*public function __toString(){
			return "$this->name";
		}*/		
	}
	class Books{
		use NameTrait;
	}
	class Child{
		use NameTrait;
	}
	$hello = new Child;
	$hello->setName('Ooo');
	print $hello->getName();
	//---------------------------
	abstract class Database{
		abstract public function connect($server,$username,$password,$database);
		abstract public function query($sql);
		abstract public function fetch();
		abstract public function close();
	}
	class MySQL extends Database{
		protected $dbh;
		protected $query;
		public function connect($server,$username,$password,$database){
			$this->dbh = mysqli_connect($server,$username,$password,$database);
		}
		public function query($query){
			$this->query = mysqli_query($this->dbh,$sql);
		}
		public function fetch(){
			return mysqli_fetch_row($this->dbh,$this->query);
		}
		public function close(){
			mysqli_close($this->dbh);
		}
	}
	print '<br />';
	//---------------------------
	class Address{
		protected $city;
		protected $country;
		public function setCity($city){
			$this->city = $city;
		}
		public function getCity(){
			return $this->city;
		}
		public function setCountry($country){
			$this->country = $country;
		}
		public function getCountry(){
			return $this->country;
		}
	}
	class Person{
		protected $name;
		protected $address;
		public function __construct(){
			$this->address = new Address;
		}
		public function setName($name){
			$this->name = $name;
		}
		public function getName(){
			return $this->name;
		}
		public function __call($method,$arguments){
			if(method_exists($this->address, $method)){
				return call_user_func_array(array($this->address, $method),$arguments);
			}
		}
		//new---------for clone
		public function __clone(){
			$this->address = clone $this->address;
		}
	}
	$rasmus = new Person;
	$rasmus->setName('Rasmus Lerd');
	$rasmus->setCity('New York');

	$zeev = clone $rasmus;
	$zeev->setName('Zeev Gorn');
	$zeev->setCity('Kiev');

	print $rasmus->getName() . ' lives in ' . $rasmus->getCity() . '. <br />';
	print $zeev->getName() . ' lives in ' . $zeev->getCity() . '.<br />';

