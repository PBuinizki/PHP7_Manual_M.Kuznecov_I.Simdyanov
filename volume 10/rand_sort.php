<?php
    $rand = rand(5,10);
    $arr_4 = [];
    for ($i = 0; $i <= $rand; $i++)
    {
        $arr_4[$i] = rand(0,100);
    };
    echo '<br>Выводим неотсортированный массив:<br>';
    print_r($arr_4);
    sort($arr_4);
    echo '<br><br>Выводим отсортированный массив:<br>';
    print_r($arr_4);