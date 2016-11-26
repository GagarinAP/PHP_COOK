<?php
	$digit = 100;
	$fruits = array(1 => 'Apples','Bananas','Cantaloupes','Dates');
	foreach($fruits as $key => $fruit){
		print "$fruit - $key.<br>";
	}
	$fr = array('red' => array('Apples','Bananas'), 'yellow' => array('Cantaloupes','Dates'));
	//print_r($fr);
	foreach($fr as $color => $frr){
		foreach($frr as $f){
			print "$f - $color.<br>";
		}
	}
	is_array($fruits) ? print 'This is array<br>' : print 'Not array<br>';
	is_array($digit) ? print $digit.' - This is array<br>' : print $digit.' - Not array<br>';

	$any = array('Apples','Bananas', ' ','Cantaloupes','Dates');
	print_r($any);
	print '<br>';
	print_r(array_splice($any,3,3));

	print '<br>';

	$string = join(',',$fruits);
	$string = '';
	foreach($fruits as $key => $value){
		$string .= ",$value";
	}
	$string = substr($string,1);
	print $string;
	print '<br>';
	function array_to_comma_string($array){
		switch(count($array)){
			case 0: return '';
			case 1: return reset($array);
			case 2: return join(' and ', $array);
			default:
				$last = array_pop($array);
				return join(', ',$array)." and $last";
		}
	}
	$fruit = array('Apples','Bananas');

	print_r(array_to_comma_string($fruits));
	print '<br>';
	print_r(array_to_comma_string($fruit));
	print '<br>';
	print max($fruits);
	print '<br>';
	print min($fruits);
	$reversed = array_reverse($fruits);
	print_r($reversed);
