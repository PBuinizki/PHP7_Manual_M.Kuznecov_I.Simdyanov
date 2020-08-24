<?php
require_once "odd.php";
require_once "sum.php";

if ($odd(5)) echo "Нечетное!";
else echo "Четное!";

echo '<br><br>';

echo sum(4, 55, 7);
