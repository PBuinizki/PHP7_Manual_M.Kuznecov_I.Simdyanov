<?php 
    function fib($n) {
        if($n == 0) {
            return 0;
        }
        elseif($n == 1 || $n == 2){
            return 1;
        }
        elseif($n < 0){
            return 0;
        }
        elseif($n > 2){
            $first = 0;
            $current = 1;
            for ($i=3; $i <= $n; $i++) { 
               $second = $current;
               $current = $second + $first;
               $first = $second;
            }
            return $current;
        }
    };