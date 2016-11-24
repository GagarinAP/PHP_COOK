<?php   
	print trim(' abc ',' \t\n\r\0\x0B');
    print ltrim('10 print hello',' 0..9');
    print rtrim('10 print hello;',';');