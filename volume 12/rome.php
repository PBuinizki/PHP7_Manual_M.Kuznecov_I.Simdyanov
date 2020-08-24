<?php
function rome($x)
{
    //приводим число к 4м знакам
    $x = sprintf("%04d", $x);
    $y = strlen($x);
    //первый символов
    $y1 = substr($x, 0, 1);
    $y1 = str_replace([0, 1, 2], ["", "M", "MM"], $y1);
    //второй символ
    $y2 = substr($x, 1, 1);
    $y2 = str_replace([0, 1, 2, 3, 4, 5, 6, 7, 8, 9], ["", "C", "CC", "CCC", "CD", "D", "DC", "DCC", "DCCС", "СM"], $y2);
    // третий символ
    $y3 = substr($x, 2, 1);
    $y3 = str_replace([0, 1, 2, 3, 4, 5, 6, 7, 8, 9], ["", "X", "XX", "XXX", "XL", "L", "LX", "LXX", "LXXX", "XC"], $y3);
    // четвёртый символ
    $y4 = substr($x, 3, 1);
    $y4 = str_replace([0, 1, 2, 3, 4, 5, 6, 7, 8, 9], ["", "I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX"], $y4);
    //собираем строку
    echo $y1 . $y2 . $y3 . $y4;
};
