# benchmark
Benchmark your code

## Installation
```
composer require vesic/benchmark
```

## Basic Usage
```
require __DIR__ . '/vendor/autoload.php';

use Vesic\Benchmark\Benchmark;

$benchmark = new Benchmark;

$bencmark->run(function() {
    for ($i=0; $i<1e6; $i++) { }
});

function yourFunctionToMeasure() {
    // expensive computing
}

$benchmark->run('yourFunctionToMeasure');

function functionWithParams($param) {
    for ($i=0; $i<$param; $i++) { }
}

$benchmark->run('functionWithParams', 1e6);
```

## Output
```
Formated output here
```