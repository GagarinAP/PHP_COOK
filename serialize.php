<?php
	$animal = 'turtles';
	$turtles = 103;
	print $$animal;

	$pantry = array('sugar'=>'2 kg.','butter'=>'3 liter');
	$fp = fopen('pantry.php', 'w') or die ("Cant open pantry");
	fputs($fp,serialize($pantry));//a:2:{s:5:"sugar";s:5:"2 kg.";s:6:"butter";s:7:"3 liter";}
	fclose($fp);

	$new_pantry = unserialize(file_get_contents('pantry.php'));

	print '<br>';
	print_r($new_pantry);
	print '<br>';
	var_dump($pantry);

	$fpjs = fopen('pantry.js', 'w') or die ("Cant open pantry");
	fputs($fpjs,json_encode($pantry));//{"sugar":"2 kg.","butter":"3 liter"}
	fclose($fpjs);
	$new_pantry_js = json_decode(file_get_contents('pantry.js'),TRUE);

	print '<br>';
	print_r($new_pantry_js);
	
	$shopping_cart = array('abc'=>2,'def'=>1,'jgh'=>4);
	print '<a href="next.php?cart='.urlencode(serialize($shopping_cart)).'">NEXT</a>';