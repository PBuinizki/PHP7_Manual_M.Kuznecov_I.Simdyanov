<?php
    function hello(){
        $file = 'hello.txt';
        $text = 'Hello, world!';
        file_put_contents($file,$text);
        return true;
    };

    function showHello(){
        $file = 'hello.txt';
        $show = file_get_contents($file);
        echo $show;
        return true;
    };