<?php

class Rectangle {
        
    public $width ;
    public $height ;

    public function __construct($width,$height) {
        $this->width = $width ;
        $this->height = $height ;
    }

    public function getArea() {
        return $this->width * $this->height ;
    }

    public function getPerimeter() {
        return ($this->width * $this->height) *2 ;
    }

    public function Display() {
        return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
    }
}
    $rectangle = new Rectangle(10,20) ;
    echo $rectangle->width . "<br>" ;
    echo $rectangle->height . "<br>" ;
    echo $rectangle->Display() . "<br>"  ;
    echo  ("diện tích:" . $rectangle->getArea() . "<br>" )  ;
    echo ("chuvi :" . $rectangle->getPerimeter()) ;
    // echo $rectangle->__construct() ;


?>