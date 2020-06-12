<?php

    class EmployeeManager {
        public $employee = [] ;

        public function __construct() 
        {
            
        }

        public function addEmployee($_employee) {
            array_push($this->employee,$_employee) ;
        }

        public function getData() {
            return $this->employee ;
        }
    }


?>