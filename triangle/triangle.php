<?php
    class Shape {
        public $side1 ;
        public $side2 ;
        public $side3 ;
        
        public function __construct($side1=0.0,$side2=0.0,$side3=0.0)
        {   
            $this->side1 =$side1 ;
            $this->side2 =$side2 ;
            $this->side3 =$side3 ;
        }

        public function getSide() {
            return ($this->side1.$this->side2.$this->side3) ;
        }
        public function setSide($side1,$side2,$side3) {
            return ($this->side1=$side1 . $this->side2 =$side2 . $this->side3 = $side3) ;
        }
    }
    
    class Triangle extends Shape {
        public $height ;
        public $color ;

        public function __construct($side1,$side2,$side3,$height,$color)
        {
            parent::__construct($side1,$side2,$side3) ;
            $this->height = $height ;
            $this->color = $color ;
        } 
        public function getColor() {
            return ($this->height . $this->color) ;
        }
        public function setColor($height,$color) {
            return ($this->height = $height . $this->color = $color) ;
        }
        public function getArea() {
            return 1/2*($this->side3 * $this->height) ;
        }
        public function getPerimeter() {
            return ($this->side1 + $this->side1 + $this->side3) ;
        }

        public function __toString()
        {
            return "màu sắc :" . $this->color . "diện tích" .$this->getArea() . "chuvi :" . $this->getPerimeter() ;
        }
    }

    print_r($_POST['canh1']);
    
    if($_SERVER["REQUEST_METHOD"]== "POST") {
        $canh1 = $_POST['canh1'] ;
        $canh2 = $_POST['canh2'] ;
        $canh3 = $_POST['canh3'] ;

        if(isset($canh1) && !empty($canh1) && $canh1 !== '') {
            $triangle = new Triangle($canh1,$canh2,$canh3,4,'blue') ;
            echo $triangle->__toString() ;
        } else {
            echo "vui lòng nhập giá trị" ;
        }
    } 

    




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
    </style>
</head>
<body>
    <fieldset>
        <legend>Toán Hình Học</legend>
        <form method="post" action="triangle.php">
           cạnh 1 : <input type="text" name="canh1" placeholder="nhập cạnh 1">
            <br> <br>
           cạnh 2:<input type="text" name="canh2" placeholder="nhập cạnh 2">
            <br> <br>
           cạnh 3:<input type="text" name="canh3" placeholder="nhập cạnh 3">
            <br> <br>
            <input type="submit" name="submit"> 
        </form>
    </fieldset>
</body>
</html>