<?php

    class StopWatch {
        private $starttime ;
        private $endtime ;
        public function __construct()
        {
            $this->starttime = microtime(true);
        }
        public function getStartTime() {
            return $this->starttime;
        }

        public function getEndTime() {
            return $this->endtime ;
        }

        public function Start() {
            $this->starttime = microtime(true);
        }
        public function End() {
            $this->endtime = microtime(true);
        }

        public function getElapsedTime() {
            return ($this->endtime - $this->starttime)*1000 ;
        }
       
    }

    $stopwatch = new StopWatch() ;
    $stopwatch->Start() ;
    sortArr();
    $stopwatch->End() ;
    echo $stopwatch->getElapsedTime() ;

    function sortArr() {
        $arr = array() ;
        for($i=0;$i<100;$i++) {
            $arr[$i] = rand(0,10000) ; 
        }
    }
?>