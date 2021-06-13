<?php
class R extends Shape
{
    public $width;
    public $height;
    public function __construct($name,$width,$height)
    {
        parent::__construct($name);
        $this->width=$width;
        $this->height=$height;
    }
    public function disPlay()
    {
        parent::show();
        echo " width= $this->width , height= $this->height<br>";
    }
    public function getArea()
    {
        return ($this->width + $this->height) * 2;
    }

    public function getPerimeter()
    {
        return $this->height * $this->width;
    }
}
