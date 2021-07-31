<?php 
class A 
{
    public static function talk()
    {
        echo "I'm A";
    }
}

$func = ['A', 'talk'];
$func();

'A'::talk();
?>
