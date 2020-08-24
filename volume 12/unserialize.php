<?php
function pointUnserialize()
{
    $unserilize = file_get_contents('./point.txt');
    $result = unserialize($unserilize);
    return $result;
};
