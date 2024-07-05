<?php
function triangleArea($base, $height)
{
    return ($base*$height)/2;
  
}

function squareArea($base, $height)
{
    return ($base*$height);
}

function trapeziumArea($upper, $lower, $height)
{
    return(($upper+$lower)*$height/2);
}

echo triangleArea(4, 8) . "<br/>";
echo squareArea(4, 30) . "<br/>";
echo trapeziumArea(4, 8, 10) . "<br/>";