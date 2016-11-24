<?php
	$line = "aaaaabbbbbcccccddddd";   
	$fields = str_split($line,5);
	for($i = 0; $i < strlen($line)/5; $i++){
		print $fields[$i]."<br>";
	}
	$string = 'asf,sdfsdf,gdfhdf,dsfda,dhdgdf';
	$string_array = explode(',',$string);//explode(',',$string,3); остача после 3
	print_r($string_array);
	$s = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis harum, architecto rem minus doloremque quis tempora quisquam, iusto qui labore repudiandae beatae ipsa, placeat necessitatibus deserunt. Eos repellat laboriosam tenetur id cum eius tempore nisi, aliquam obcaecati dolores, maxime voluptatum reiciendis doloribus asperiores quos reprehenderit labore! Minus maiores rerum neque. Quibusdam facilis provident cupiditate dolorum asperiores pariatur vel cum voluptatum, ad quisquam voluptates a animi repudiandae voluptas aspernatur debitis, quaerat illo minima in! Eius cumque, explicabo sed maiores eos earum! Officiis ratione modi fugit vitae, ducimus laboriosam quaerat, optio nam. Sit rem suscipit tempore odit facere deserunt ipsum accusantium, fugiat illo doloribus, veniam minus ea possimus quisquam id impedit quaerat, illum sed reiciendis. Animi nisi quibusdam tempora ullam quas perspiciatis nam. Aliquam rerum culpa amet ratione incidunt placeat nisi atque perspiciatis eaque eligendi voluptatum esse maxime sequi libero, beatae dolor, qui illum aut perferendis repellendus unde accusamus molestias ipsa. Ducimus veniam magni itaque minima. Vel veniam, laudantium repellendus consequuntur eaque in facere odit. Excepturi eligendi quae accusamus at nostrum minus. Id fugiat rem sunt enim iure sit, dignissimos quisquam a aperiam deserunt, quasi tempore modi similique autem tenetur dicta mollitia ea earum alias itaque illum, quo natus. Pariatur, reiciendis, quam!";

	print "<pre>\n".wordwrap($s,50,"\n\n")."\n</pre>";//wordwrap($s) default 75 letter in line