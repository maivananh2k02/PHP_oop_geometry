<?php


class Shape
{
public $name;

    /**
     * Shape constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function show(){
        echo 'day la hinh '.$this->name;
    }
}