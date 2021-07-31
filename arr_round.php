<?php

$a = [6, 7, 1, 2, 3, 4, 5];

$count = $a[0];
$rounds = $a[1];

$arr_round = array_slice($a, 2);
echo json_encode($arr_round);
echo "<br>";

if (count($arr_round) < $count) {
	echo implode(",", $arr_round);
	exit;
}

for ($i = 0; $i < $rounds; $i++) {
	$first = array_shift($arr_round);
	// array_push($arr_round, $first);
	array_splice($arr_round, $count - 1, 0, $first);
	echo json_encode($arr_round);
	echo "<br>";
}

echo json_encode($arr_round);
?>