<?php


class Square extends R
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width);
    }

    public function disPlay()
    {
        parent::show();
        echo '<br>do dai canh :'.$this->width; // TODO: Change the autogenerated stub
    }

    public function squarePerimeter(){
        return 4*$this->width;
    }
    public function squareArea(){
        return $this->width**2;
    }
}