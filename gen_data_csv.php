<?php   
	$sales = array(	
			array('Northeast','2005-01-01','2005-02-01', 12.574),
			array('Northeast1','2005-01-01','2005-02-01', 124.514),
			array('Northeast2','2005-01-01','2005-02-01', 120.524),
			array('Northeast3','2005-01-01','2005-02-01', 121.534),
			array('Northeast4','2005-01-01','2005-02-01', 122.554)
		);
	//$filename = './sales.csv'; //save file in directory	
	//$fn = fopen($filename, 'w') or die("Cant open $filename");

	//$fn = fopen('php://output','w'); view data in print

	ob_start();
	$fn = fopen('php://output','w') or die("Cnat open php://output");
	foreach($sales as $sales_line){
		if(fputcsv($fn, $sales_line) === false){
			die("Cant write CSV line");
		}
	}
	fclose($fn) or die("Cant close php://output");
	$output = ob_get_contents();
	ob_end_clean();