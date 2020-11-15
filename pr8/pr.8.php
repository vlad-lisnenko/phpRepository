<?php
	$numbers = array(array());
	
	for($i = 0; $i < 5; $i++) {
		for($j = 0; $j < 10; $j++) {
			$numbers[$i][$j] = rand(1, 10);
		}
	}

	echo "<ol>";
	for($i = 0; $i < 5; $i++) {
		echo "<li>";
		for($j = 0; $j < 10; $j++) {
			echo " " . $numbers[$i][$j];
		}
		echo "</li>";
	}
	echo "</ol>";
?>