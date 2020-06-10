<?php

    class Fan {
        const SLOW = 1 ;
        const MEDIUM = 2 ;
        const FAST = 3  ;
        private $SPEED = self::SLOW  ;
        private $ON = true ;
        private $radius = 5 ;
        private $color = "blue" ;

        function __construct($SPEED,$radius,$color,$ON) {
          $this->SPEED = $SPEED ;
          $this->radius = $radius ;
          $this->color = $color ;
          $this->ON = $ON ;
        }

        function getSlow() {
            $this->SLOW ;
        }
        function getMEdiUm() {
            $this->MEDIUM ;
        }
        function getFast() {
            $this->FASt  ;
        }
        function setSlow($SLOW) {
            $this->SLOW = $SLOW ;
        }
        function setFast($FASt) {
            $this->FASt = $FASt ;
        }
        function setMediUm($MEDIUM) {
            $this->MEDIUM = $MEDIUM ;
        }

        function ToString() {
            if($this->ON) {
                return ( "tốc độ :" .$this->SPEED . "màu :" . $this->color . "bán kính :" . $this->radius . "fan is on") ;
            } else {
                return ("tốc độ :" . $this->SPEED . "màu :" . $this->color . "bán kính :" . $this->radius . "fan is of" ) ;
            }
        }
    }

    $fan1 = new Fan(3,10,'yellow',true) ;
    $fan2 = new Fan(2,5,'blue',false) ;
    echo $fan1->ToString() ."<br>" ;
    echo $fan2->ToString() ;




?>