<?php

define('PHPFOX_TIME_START', microtime(true));

ob_start();

include __DIR__ . '/config/bootstrap.php';

service('session')->start();

service('app')->dispatch();

echo ob_get_clean();

define('PHPFOX_TIME_SHUTDOWN', microtime(true));