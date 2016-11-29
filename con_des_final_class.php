<?php
	class user{
		function load_info($username){
			return $username;
		}
	}
	$user = new user;
	$user->load_info($_GET['username']);

	$adam = new user;
	$adam->load_info('Andrey');
	//-----------------------
	class user{
		public $username;
		function __construct($username,$password){
			...
		}
	}
	$user = new user('Adam','1234567890');
	//---------------------------
	class Database{
		function __destruct(){
			db_close($this->handle);
		}
	}
	//---------------------------
	class Person{
		public $name;
		protected $age;
		private $salary;

		public function __construct(){
			...
		}

		protected function set_age(){
			...
		}

		private function set_salary(){
			...
		}
	}
	//----------------------------
	final public function connect($server,$username,$password){
		...
	}
	final class MySQL{
		...
	}