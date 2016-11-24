<?php
	$packed = pack('S4',1984,1994,2004,2014);
	$nums = unpack('S4',$packed);
	print_r($nums);	