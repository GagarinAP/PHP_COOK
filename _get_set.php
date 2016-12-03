<?php
	class Person{
		private $__data = array();
		public function __get($property){
			if(isset($this->__data[$property])){
				return $this->__data[$property];
			}else{
				return false;
			}
		}
		public function __set($property,$value){
			$this->__data[$property] = $value;
		}
	}
	$john = new Person;
	$john->email = 'gari@gmail.com';
	print $john->email;
	print '<br />';
	//-------------------------------
	class Tweet{
		protected $data;
		public function from($from){
			$data['from'] = $from;
			return $this;
		}
		public function withStatus($status){
			$data['status'] = $status;
			return $this;
		}
		public function inReplyToId($id){
			$data['id'] = $id;
			return $this;
		}
		public function send(){
			return $id = 1;
		}
	}
	$tweet = new Tweet;
	$id = $tweet->from('@rasmus')
				->withStatus('php 7 released! #php')
				->send();
	$reply = new Tweet;
	$id2 = $reply->withStatus('I <3 Unicode!')
				->from('@a')
				->inReplyToId($id)
				->send();
	//--------------------------------
	class Math{
		const pi = 3.14;
	}
	$area = Math::pi * 3 * 5;
	print $area;
	//--------------------------------
	$class_name = 'Math';
	$class = new $class_name;//new Math