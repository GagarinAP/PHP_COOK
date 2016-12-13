<?php 
class Car{
	const WHEELS = 4;
	public static $engine = 1;
	public $color = 'no color';
	public $speed = null;
	public $fuel = null;
	public $brand = 'no brand';
	public function __construct($color,$speed,$fuel,$brand){
		$this->color = $color;
		$this->speed = $speed;
		$this->fuel = $fuel;
		$this->brand = $brand;
	}
	public static function whatIsIt(){
		echo 'It is static'.self::$engine;
	}
	public function test($_color){
		echo '<p>test('.$_color.');</p>';
	}
	public function tripTime($distance){
		echo self::WHEELS;
		$time = $distance / $this->speed * Car::WHEELS;
		return '<p>'.$time.'</p>'.self::whatIsIt();
	}
}

$car1 = new Car('Yellow', 110, 14, 'Bmw');
$car2 = new Car('Black', 140, 11, 'Audi');

echo '<pre>';
print_r($car1);
print_r($car2);

echo $car1->tripTime(1000);
echo $car2->tripTime(1000);

echo Car::$engine;
Car::whatIsIt();