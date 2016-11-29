<?php
	class guest_book {
		public $comment;
		public $last_visitor;
		public function update($comment,$visitor){
			return $visitor.' comment: '.$comment;
		}
	}

	//$db = new guest_book;
	$db = (new guest_book)->update('hello bro','Andrey');
	print_r($db);

	print '<br>';
	//-----------------------
	class convert{
		public static function c2f($degrees){
			return (1.8 * $degrees) + 32;
		}
	}
	$f = convert::c2f(20);
	print_r($f);

	print '<br>';
	//-----------------------
	class DB{
		public $result;
		function getResult(){
			return $this->result;
		}
		function query($sql){
			error_log("errrr");
			return false;
		}
	}
	class MySQL extends DB{
		function query($sql){
			$this->result = mysql_query($sql);
		}
	}