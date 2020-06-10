<?php
      
    class QuadraticEquation {
        public $a ;
        public $b ;
        public $c ;

        public function __construct($a,$b,$c) {
            $this->a = $a ;
            $this->b = $b ;
            $this->c = $c ;
        }
        
        public function getA() {
           return  $this->a ;
        }
        public function getB() {
            return  $this->b ;
         }
         public function getC() {
            return  $this->c ;
         }

         public function getDiscriminant() {
             return $this->delta = $this->b**2 - 4*$this->a*$this->c ;
         }

         public function getRoot1() {
             return (-$this->b + sqrt($this->delta) ) / 2*$this->a ;
         }

         public function getRoot2() {
            return (-$this->b - sqrt($this->delta)) / 2*$this->a ;
         }

         public function OpeRaTor() {
             if($this->delta>=0) {
                return ($this->getRoot1() . $this->getRoot2()) ;
             } elseif($this->delta=0) {
                 return $this->getRoot1() ;
             } else {
                 echo "“The equation has no roots" ;
             }
         }
    }

    $quadratic = new QuadraticEquation(2,7,3) ;
    echo $quadratic->getA() . "<br>" ;
    echo $quadratic->getB()  . "<br>" ;
    echo $quadratic->getC() . "<br>" ;
    echo $quadratic->getDiscriminant() . "<br>" ;
    echo ("PT có 2 nghiệm :" . $quadratic->OpeRaTor() ) ;



?>





