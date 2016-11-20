<?php

include __DIR__ . '/constants.global.php';

$autoloader = include __DIR__ . '/../vendor/autoload.php';

services()->set('autoloader', $autoloader)->set('eventManager', events())
    ->set('configManager', configs());

configs()->loadModularConfig();

$autoloader->setPsr4('Auth\\', [
    __DIR__ . '/../package/phpfox-module-auth/src',
    __DIR__ . '/../package/phpfox-module-auth/test',
]);