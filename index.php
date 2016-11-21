<?php

define('PHPFOX_TIME_START', microtime(true));

ob_start();

include __DIR__ . '/config/bootstrap.php';

//service('app')->dispatch();
//
//echo ob_get_clean();
//
//define('PHPFOX_TIME_SHUTDOWN', microtime(true));
//
//service('log.auth')->info('Can not log because error message');

$router = service('router');