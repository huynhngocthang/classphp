<?php
namespace Services ;
use Models\Product ;

class ProductManager {
        
    private $products ;

        public function __construct() 
        {
            $this->products = [] ;
        }

        public function add($product) {
            $this->Products[] = $product ;
        }
        public function getProducts() {
          return  $this->products ;
        }
    }



?>