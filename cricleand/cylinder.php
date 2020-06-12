<?php
    include "Cricle.php" ;

    class Cylinder extends Cricle {
        public $height ;

        public function __construct($radius,$color,$height)
        {
            parent::__construct($radius,$color) ;
            $this->height = $height ;
        }

        public function Volume() {
            return pi() * pow($this->radius,2) * $this->height ;
        }

        public function __toString()
        {
             return "hình trụ có bán kính :" . $this->radius . "màu :" . $this->color . "chiều cao :" . $this->height  ;  
        }
    }

    $cricle = new Cricle(4,'yellow') ;
    echo $cricle->getRadius() . "<br>" ;
    echo $cricle->getColor() . "<br>" ;
    echo $cricle->setRadius(7) . "<br>" ;
    echo $cricle->setColor('black') . "<br>" ;
    echo $cricle->__toString() . "<br>" ;
    $cylinder = new Cylinder(5,'blue',10) ;
    echo $cylinder->__toString() . "<br>" ;
    echo "thể tích :" . $cylinder->Volume() ;
    


?>