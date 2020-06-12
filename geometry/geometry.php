<?php
    class Shape {
        protected $name ;

        public function __construct( $name)
        {
            $this->name = $name ;            
        }

        public function Show() {
            return "I am a shape. My name is $this->name" ;
        }
    }

    class Rectangle extends Shape {
        public $width ;
        public $height ;

        public function __construct($name,$width,$height) 
        {
            parent::__construct($name) ;
            $this->width = $width ;
            $this->height = $height ;
        }

        public function CaculatorArea() {
            return $this->width * $this->height ;
        }

        public function CaculatorPerimeter() {
            return ($this->width + $this->height) *2 ; 
        }
    }

    class Square extends Rectangle {
        public function __construct($name,$width) {
            parent::__construct($name,$width.$width,$width) ;
        }
    }

    class Cricle extends Shape {
        public $radius ;

        public function __construct($radius)
        {
            $this->radius = $radius ;
        }

        public function CaculatorArea() {
            return $this->radius *  $this->radius * pi() ;
        }

        public function CaculatorPerimeter() {
            return  $this->radius*2*pi() ;
        }
    }
    $rectangle = new Rectangle('hình chữ nhật',20,10) ;
    echo $rectangle->CaculatorPerimeter() . "<br>" ;
    echo $rectangle->CaculatorArea() ;
    




?>