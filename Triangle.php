<?php


class Triangle
{
    public $side1 = 1.0;
    public $side2 = 1.0;
    public $side3 = 1.0;

    public function __construct($side1, $side2, $side3)
    {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }
    public function createTriangle(){

    }
    public function setupTringangle($side1, $side2, $side3){
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }
    public function getArea(){
        return pow($this->side1, 2)* (sqrt(3)/4);
    }
    public function getPerimeter(){
        return $this->side1 * 2 + $this->side2;
    }
    public function __toString(){
        return $this->side1.$this->side2.$this->side3.'<pre>'.$this->getArea().'<pre>'.$this->getPerimeter();
    }

}