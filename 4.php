<?php 
	$num = "082307";
	if (strlen($num) <= 6)
		echo (substr($num, 0, 2,).":".substr($num, 2, 2).":".substr($num, 4, 2));
	
	else echo "Enter Number less | equal 6";
?>