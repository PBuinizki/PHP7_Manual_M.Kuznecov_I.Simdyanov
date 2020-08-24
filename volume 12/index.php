<?php
require_once "hightlight.php";
require_once "point.php";
require_once "serialize.php";
require_once "unserialize.php";
require_once "rome.php";
$point = new Point;
$point->x = 1;
$point->y = 1;
pointSerialize($point);
echo '<br>';
$result = pointUnserialize();
print_r($result);
echo '<br>';
echo '<br>Перевод арабского числа в римское:<br>';
rome(1966);
