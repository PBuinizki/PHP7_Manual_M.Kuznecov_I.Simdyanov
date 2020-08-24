<?php
function pointSerialize($str)
{
    $serialize = serialize($str);
    file_put_contents('point.txt', $serialize);
};
