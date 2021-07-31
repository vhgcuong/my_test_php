<?php

class A
{
    public $b;
}

class B
{
    public $x;
}

$b = new B();
$b->x = 10;

$a = new A();
$a->b = $b;

$c = clone $a;

echo $c->b === $a->b ? 'true' : 'false';

?>