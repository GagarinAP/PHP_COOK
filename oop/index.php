<?php 
class Base{
	public $a;
	protected $b;
	private $c;
	function test(){
		echo $this->a;
		echo $this->b;
		echo $this->c;
	}
}