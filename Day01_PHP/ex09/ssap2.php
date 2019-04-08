#!/usr/bin/php
<?php
declare(strict_types = 1);

function is_set(string $val): bool {
	if (empty($val)) {
		if ($val === "0") {
			return true;
		}
		else {
			return false;
		}
	}

	return true;
}

function in_ssap_order(string $a, string $b): bool {
	$a = strtolower($a);
	$b = strtolower($b);
	$sort = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
	if (strlen($a) < strlen($b))
		$length = strlen($a);
	else
		$length = strlen($b);

	for ($i = 0; $i < $length; $i++) {
		$sub_a = substr($a, $i, 1);
		$sub_b = substr($b, $i, 1);
		$x = array_search($sub_a, $sort);
		$y = array_search($sub_b, $sort);

		$x === false ? ($x = ord($sub_a) + 100) : 0;
		$y === false ? ($y = ord($sub_b) + 100) : 0;

		if ($y < $x) {
			return false;
		}
		if ($y > $x) {
			return true;
		}
	}

	return strlen($a) <= strlen($b) ? true : false;
}



$array = array();
unset($argv[0]);

foreach($argv as $argv_value) {
	$temp = array_filter(explode(" ", $argv_value), is_set);

	foreach ($temp as $temp_value) {
		$array[] = $temp_value;
	}
}

for ($i = 0; $i < count($array) - 1;) {
	if (!in_ssap_order($array[$i], $array[$i + 1])) {
		$temp = $array[$i];
		$array[$i] = $array[$i + 1];
		$array[$i + 1] = $temp;
		$i = 0;
		continue;
	}
	$i++;
}

foreach ($array as $v) {
	echo $v . "\n";
}
?>
