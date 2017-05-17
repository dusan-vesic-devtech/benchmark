<?php

namespace Vesic\Benchmark;

class Benchmark {
    
    protected $_start;
    protected $_end;
    protected $_memoryUsage;
    
    public function startTime() {
        $this->_start = microtime(true);
    }
    
    public function endTime() {
        $this->_end = microtime(true);
        $this->_memoryUsage = memory_get_usage();
    }
    
    public function run($fn) {
        $this->startTime();
        call_user_func_array($fn, []);
        $this->endTime();
        echo 'time: ' . round(($this->_end - $this->_start), 3) . '. Memory: ' . $this->convertToHumanReadable($this->_memoryUsage);
    }
    
    public function convertToHumanReadable($size) {
        $unit = array('b','kb','mb','gb','tb','pb');
        return @round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];
    }
    
}