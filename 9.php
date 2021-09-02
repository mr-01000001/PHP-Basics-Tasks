<?php 
	$n = 53;
	$res = abs($n - 51);
	if ($n >= 0)
	{
		if ($n <= 51) echo $res;
		else echo ($res*=3);
	}
	else echo "Invalid Value.";
?>