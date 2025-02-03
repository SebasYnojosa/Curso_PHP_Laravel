<?php

$person = "José";
$client = &$person; // Se asigna por referencia la variable $person a la variable $client

var_dump($person, $client);

$person = "Esteban";

var_dump($person, $client);

$client = "Juan";

var_dump($person, $client);