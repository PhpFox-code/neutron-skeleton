<?php

include __DIR__ . '/constants.global.php';

$autoloader = include __DIR__ . '/../vendor/autoload.php';

$autoloader->setPsr4('Auth\\', [
    __DIR__ . '/../package/phpfox-module-auth/src',
    __DIR__ . '/../package/phpfox-module-auth/test',
]);