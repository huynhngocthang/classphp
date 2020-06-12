<?php

    class Application {
        private static $instance ;

        private function __construct() {

        }

        public function getInstance() {
            if(self::$instance === null) {
                self::$instance = new Application() ;
                echo 'hello' ;
            }
                return self::$instance ;
        }
    }
    $app1 = Application::getInstance() ;
    $app2 = Application::getInstance() ;
    $app3 = Application::getInstance() ;

    
?>