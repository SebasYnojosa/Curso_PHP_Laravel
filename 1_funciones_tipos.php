<?php
declare (strict_types = 1);
// PHP 7 - se agregan tipos estrictos

function add(int $a, int $b): int 
{
    return $a + $b;
}

var_dump(add((int)5.0, 3));
// var_dump(add("5",4));
// var_dump(add(5.0,4));
// EstaS funciones darán error debido al strict_types