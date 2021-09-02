<?php 

		/*
			Prog to handele this item.
			----------------------------
			a) ascending order sort by value.
			b) ascending order sort by Key.
			c) descending order sorting by Value.
			d) descending order sorting by Key.
		*/

			 # intialize associative arr.
	$names = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");

	echo "Arr as normal <br> ---------------- <br>";

	# print element of array before sort.
	foreach ($names as $key => $value) 
		echo "key: ". $key." : value: ".$value."<br>";
		echo "<br>";

		#sort array.
	$asc_sort_val = $names;
	asort($asc_sort_val); 

	$asc_sort_key = $names;
	ksort($asc_sort_key); 			

	$des_sort_val = $names;
	arsort($des_sort_val);

	$des_sort_key = $names;			
	krsort($des_sort_key);

		#print array after sorting.
	echo "Arr ascending order sort by value <br> -------------------- <br>";
	foreach ($asc_sort_val as $key => $value)
		echo "key: ". $key." : value: ".$value."<br>";
		echo "<br>";

	echo "Arr ascending order sort by Key <br> -------------------- <br>";
	foreach ($asc_sort_key as $key => $value)
		echo "key: ". $key." : value: ".$value."<br>";
		echo "<br>";

	echo "Arr descending order sorting by Value <br> -------------------- <br>";
	foreach ($des_sort_val as $key => $value)
		echo "key: ". $key." : value: ".$value."<br>";
		echo "<br>";

	echo "Arr descending order sorting by Key <br> -------------------- <br>";
	foreach ($des_sort_key as $key => $value)
		echo "key: ". $key." : value: ".$value."<br>";
		echo "<br>";
?>