<?php

define('PHPFOX_TIME_START', microtime(true));

ob_start();

include __DIR__ . '/config/bootstrap.php';

service('session')->start();

$_SESSION['data_id'] = new stdClass();
$_SESSION['phim'] = services();

service('app')->dispatch();

echo ob_get_clean();

define('PHPFOX_TIME_SHUTDOWN', microtime(true));