<?php
include "point2d.php" ;

    class Point3D extends Point2D {
        public $z ;

        public function __construct($x=0.0,$y=0.0,$z=0.0)
        {
            parent::__construct($x,$y) ; 
            $this->z = $z ;
        }  

        public function getZ( ) {
            return $this->z ;
        }
        public function setZ( $z) {
            return $this->z = $z ;
        }
        public function setXYZ($x,$y,$z) {
            return ( $this->x = $x . "<br>" . $this->y = $y . "<br>" . $this->z = $z) ;
        }
        public function getXYZ() {
            return ( $this->x  . "<br>" . $this->y  . "<br>" . $this->z ) ;
        }
        public function __toString()
        {
            return ("float x:" . $this->x . "float y :" . $this->y . "float z :" . $this->z ) ;
        }
    }
    $point1 = new Point3D(4.5,4.6,4.2)  ;
    echo $point1->getXYZ() . "<br>" ;
    echo $point1->__toString() . "<br>" ;
    echo $point1->getXY() . "<br>" ;
    $point = new Point2D(2.5,3.2) ;
    echo $point->getXY() ;
    echo $point->__toString() ;



?>