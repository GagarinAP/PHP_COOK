<?php
	foreach([4,'dsf',567,53,'fsdggh'] as $numeric){
		if(is_numeric($numeric)){
			print "yes";
		}else{
			print "no";
		}
		print "\n";
	}
	//is_float is_double is_int is_long
	$num = round(2.4);
	printf("2.4 round float %s", $num);

	$start = 3;
	$end = 7;
	for($i = $start; $i<=$end;$i++){
		printf("<br>%d squared is %d\n",$i,$i*$i);
	}
	$number = range(3,7);
	foreach($number as $n){
		printf("<br>%d cube is %d\n",$n,$n*$n*$n);
	}
	print '<br>';
	print_r(range('c', 'l'));

	//-----------------
	function squares($start,$stop){
		if($start < $stop){
			for($i = $start; $i <= $stop; $i++){
				yield $i => $i*$i;
			}
		}else{
			for($i = $stop; $i >= $start; $i--){
				yield $i => $i*$i;
			}
		}
	}
	foreach(squares(3,15) as $n => $square){
		printf("<br>%d squared is %d\n",$n,$square);
	}
	print '<br>';
	$random_number = mt_rand(1,1000);
	print $random_number;