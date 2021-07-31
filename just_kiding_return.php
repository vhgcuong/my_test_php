<?php

function f1() {
	return null;
}

function f2() {
	return ;
}

function f3() {

}

$a = f1();
$b = f2();
$c = f3();

echo gettype($a);
echo gettype($b);
echo gettype($c);

?>