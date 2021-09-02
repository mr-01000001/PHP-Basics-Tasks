<?php 
	for ($x = 0; $x < 5; $x++)
	{
		for ($i = 0; $i <= $x; $i++)
			echo "* ";
		echo "<br>";
	}
	
	for ($a = 0; $a < 5; $a++)
	{
		for ($b = 5; $b > $a; $b--)
			echo " * ";
		echo "<br>";
	}
	
?>