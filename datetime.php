<?php
	$stamp = mktime(0,0,0,8,4,1992);
	print date('l',$stamp);

	print '<br>';

	$when = new DateTime();
	print $when->format('r');

	print '<br>';

	$a = getdate();
	printf('%s %d, %d',$a['month'],$a['mday'],$a['year']);

	print '<br>';

	$a = getdate(0);
	printf('%s %d, %d',$a['month'],$a['mday'],$a['year']);

	print '<br>';

	$when = new Datetime();
	print $when->format('d/M/Y');