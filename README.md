# benchmark
Benchmark your code

## Installation
```
composer require vesic\benchmark;
```

## Basic Usage
```
require __DIR__ . '/vendor/autoload.php';

use Vesic\Benchmark\Benchmark;

$benchmark = new Benchmark;

$bencmark->run(function() {
    for ($i=1; $i<1e6; $i++) { }
});

function yourFunctionToMeasure() {
    // expensive computing
}

$benchmark->run('yourFunctionToMeasure');
```

## Output
```
Formated output here
```