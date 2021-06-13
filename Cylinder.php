<?php


class Cylinder extends Circle
{
    public $height;
    public function __construct($name, $radius,$height)
    {
        parent::__construct($name, $radius);
        $this->height=$height;
    }
    public function display()
    {
        parent::display(); // TODO: Change the autogenerated stub
        echo '<br>chieu cao:'.$this->height;
    }

    public function surroundingArea(){
        return parent::circleArea()*$this->height;
    }
    public function totalArea(){
        return parent::circlePerimeter()*2+ parent::circleArea()*$this->height;
    }
    public function volume(){
        return $this->surroundingArea()*$this->radius/2;
    }
}