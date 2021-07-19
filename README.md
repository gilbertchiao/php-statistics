# Simple Statistics

Simple statistics library.

## Installation

```bash
composer require gilbertchiao/statistics
```

## Usage

```php
<?php

require 'vendor/autoload.php';

use GilbertChiao\Utility\Statistics as Stat;

$array = [1, 2, 3, 4, 5];

// Mean / Average
echo Stat::Mean($array);
echo Stat::Average($array);

// Lower quartile
echo Stat::Q1($array);

// Q2 / Median
echo Stat::Q2($array);
echo Stat::Median($array);

// Upper quartile
echo Stat::Q3($array);

// SD / Standard Deviation
echo Stat::SD($array);
echo Stat::StandardDeviation($array);
```

## Source

This package inspired by [Bastians Tech Blog](https://blog.poettner.de/2011/06/09/simple-statistics-with-php/).

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
