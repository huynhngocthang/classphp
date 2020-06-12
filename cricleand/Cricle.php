<?php
class Cricle {
    public $radius ;
    public $color ;

    public function __construct($radius,$color) 
    {
        $this->radius = $radius ;
        $this->color = $color ;
    }

    public function setRadius($radius) {
       return $this->radius = $radius ;
    }
    public function getRadius() {
        return $this->radius ;
    }

    public function setColor($color) {
       return $this->color = $color ;
    }
    public function getColor() {
        return $this->color ;
    }

    public function __toString()
    {
        return "hình tròn có bán kính :" . $this->radius . "màu :" .$this->color ;
    }
}


?>