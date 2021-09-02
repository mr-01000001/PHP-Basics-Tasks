<?php 
	$number = 3;
	if ($number >= 0)
		(
			if ($number % 3 == 0 || $number % 7 == 0) var_dump(true);
			else var_dump(false);
		)
	else echo "Invalid Input";
?>