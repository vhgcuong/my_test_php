<?php
class A
{
    public $x;
}

$a = new A();
$a->x = 10;

$b = $a;
$b->x = 20;

echo $a->x;

$c = new A();
$c->x = 10;

$d = &$c;
$d = new A();
$d->x = 20;

echo $c->x;

?>