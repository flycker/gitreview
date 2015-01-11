<?php
require __DIR__ . '/../vendor/autoload.php';

// Sum parameters
echo \Tiago\Test\Util::sum(5, 5, 100) . "\n";

// Sum arrya
echo \Tiago\Test\Util::sum([
	5,
	5,
	100
]) . "\n";
