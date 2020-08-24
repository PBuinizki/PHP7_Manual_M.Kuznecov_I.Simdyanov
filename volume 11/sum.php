<?php
    function sum(...$items){
        $sum = 0;
        foreach ($items as $value)
        {
            $sum += $value;
        }
        return $sum;
    };