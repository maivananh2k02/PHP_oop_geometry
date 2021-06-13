<?php


class Circle extends Shape
{
    public $radius;
    public function __construct($name,$radius)
    {
        parent::__construct($name);
        $this->radius=$radius;
    }
    public function display(){
        parent::show();
        echo '<br>ban kinh :'.$this->radius;
    }
    public function circlePerimeter(){
        return 2*3.14*$this->radius;
    }
    public function circleArea(){
        return 3.14*($this->radius**2);
    }
}