<?php

$time = microtime(1);

ob_start();

include __DIR__ . '/config/bootstrap.php';

service('app')->dispatch();

echo ob_get_clean();

echo PHP_EOL, (microtime(1) - $time) * 1000, ' (ms)';