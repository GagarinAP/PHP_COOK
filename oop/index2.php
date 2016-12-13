<?php
class Vehicle{
	public $color;
	public $speed;
	public $brand;
	public function tripTime($distance){
		$time = $distance / $this->speed;
		return $time;
	}
}
class Car extends Vehicle{	
	public $fuel;	
	public function fuelConsumption($distance){
		$result = ($this->fuel * $distance) / 100;
		return $result;
	}
}
class Bicycle extends Vehicle{	
	public $type;
	public $color = 'White';	
	const CALLORIES = 500;
	public function calloriesBurned($distance){
		$time = $this->tripTime($distance);
		$callories = $time * self::CALLORIES;
		return $callories;
	}
	public function tripTime($distance){				
		return $time = parent::tripTime($distance) * 1.2;
	}
}
class Skate extends Vehicle{
	const CALLORIES = 700;			
	public function calloriesBurned($distance){
		$time = $this->tripTime($distance);
		$callories = $time * self::CALLORIES;
		return $callories;
	}
	public function tripTime($distance){				
		return $time = parent::tripTime($distance) * 1.4;
	}
}

$car1 = new Car;
$car1->speed = 110;
$car1->fuel = 12;

$car2 = new Car;
$car2->speed = 140;
$car2->fuel = 14;

$bi1 = new Bicycle;
$bi1->speed = 20;

$sk1 = new Skate;
$sk1->speed = 10;

$distance = 100;
echo $car1->fuelConsumption($distance).'<br>';
echo $car2->fuelConsumption($distance).'<br>';
echo $bi1->tripTime($distance).'<br>';
echo $bi1->calloriesBurned($distance).'<br>';
echo $sk1->tripTime($distance).'<br>';
echo $sk1->calloriesBurned($distance).'<br>';
