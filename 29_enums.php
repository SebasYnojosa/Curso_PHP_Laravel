<?php

enum DaysOfTheWeek 
{
    case LUNES;
    case MARTES; 
    case MIERCOLES;
    case JUEVES;
    case VIERNES;
    case SABADO;
    case DOMINGO;
}

$today = DaysOfTheWeek::MARTES;

if ($today === DaysOfTheWeek::LUNES) {
    echo "Es lunes\n";
} else {
    echo "No es lunes\n";
}

enum Colour: string 
{
    case RED = '#FF0000';
    case GREEN = '#00FF00';
    case BLUE = '#0000FF';
}

echo Colour::RED->value . "\n"; // #FF0000

function isWeekend(DaysOfTheWeek $day): bool
{
    return $day === DaysOfTheWeek::SABADO || $day === DaysOfTheWeek::DOMINGO;
}

echo isWeekend(DaysOfTheWeek::VIERNES) ? "Es fin de semana\n" : "No es fin de semana\n";
