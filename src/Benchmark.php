<?php

namespace Vesic\Benchmark;

class Benchmark {
    
    protected $start;
    
    protected $end;
    
    public function start() {
        $this->start = microtime(true);
    }
    
    public function end() {
        $this->end = microtime(true);
    }
    
    public function run($fn) {
        $this->start();
        call_user_func_array($fn, []);
        $this->end();
        echo round(($this->end - $this->start), 3);
    }
    
}