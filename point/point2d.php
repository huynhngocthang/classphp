<?php
    class Point2D {
        public $x ;
        public $y ; 

        public function __construct($x = 0.0 , $y = 0.0) 
        {
            $this->x = $x ;
            $this->y = $y ;
        }
        public function Point2D() {
            return new Point2D($this->x,$this->y) ;
        }
        public function getX() {
            return $this->x ;
        }
        public function setX($x) {
            return $this->x = $x ;
        }

        public function getY() {
            return $this->y ;
        }
        public function setY($y) {
            return $this->y = $y ;
        }

        public function setXY($x,$y) {
            return ( $this->x = $x . "<br>" . $this->y = $y) ;
        }
        public function getXY() {
            return ( $this->x . "<br>" . $this->y ) ;
        }

        public function __toString()
        {
            return ("kiểu float x:" . $this->x . "kiểu float y" . $this->y) ;
        }
    }


?>