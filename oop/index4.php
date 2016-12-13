<?php 
class Phone{
	private function getNumber($name){

	}
	private function dial(){
		
	}
	public function call($name){
		$number = $this->getNumber($name);
		$this->dial($number);
	}
}
$phone = new Phone;
$phone->call('Sasha');