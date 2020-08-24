<?php

/**
 * Определение расстояния между двух точек в трехмерном пространстве 
 **/
require_once 'Pointer.php';
$point = new Point;
$point->xa = 2;
$point->ya = 3;
$point->za = 1;
$point->xb = 4;
$point->yb = 5;
$point->zb = 6;
echo "Растояние между двумя точками A($point->xa, $point->ya, $point->za) и B($point->xb, $point->yb, $point->zb) в трехмерном пространстве:<br>";
echo $point->pointDistance() . '<br>';
