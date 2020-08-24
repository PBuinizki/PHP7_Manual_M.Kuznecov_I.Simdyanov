<?php
    $date_now = date('Y-m-d-h-i-s');
    $file = (string)$date_now.'.txt';
    $random = rand(0, PHP_INT_MAX);
    file_put_contents($file,$random);
    echo "<br>Файл $file был создан! <br>Случайное число: $random<br>";