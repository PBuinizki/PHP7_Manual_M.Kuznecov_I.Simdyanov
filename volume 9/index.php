<?php
    require_once "fib.php";
    $num = 200;
    echo "Число Фибоначчи под номером $num: <br>";
    echo fib($num);
    echo "<br><br>Календарь на текущий месяц: <br>";
    require_once "calendar.php";