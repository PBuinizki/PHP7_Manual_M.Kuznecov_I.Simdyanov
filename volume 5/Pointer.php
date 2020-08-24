<?php
class Point
{
    public $xa;
    public $ya;
    public $za;
    public $xb;
    public $yb;
    public $zb;
    function pointDistance()
    {
        /* AB=√(xB-xA)2+(yB-yA)2+(zB-zA)2 */
        $distance = sqrt(pow($this->xb - $this->xa, 2) + pow($this->yb - $this->ya, 2) + pow($this->zb - $this->za, 2));
        return $distance;
    }
};
