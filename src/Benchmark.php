<?php

namespace Vesic\Benchmark;

class Benchmark {
    
    protected $_start;
    
    protected $_end;
    
    public function startTime() {
        $this->start = microtime(true);
    }
    
    public function endTime() {
        $this->end = microtime(true);
    }
    
    public function run($fn) {
        $this->startTime();
        call_user_func_array($fn, []);
        $this->endTime();
        echo round(($this->end - $this->start), 3);
    }
    
}