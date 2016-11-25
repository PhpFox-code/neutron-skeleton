<?php

include __DIR__ . '/constants.global.php';

$autoloader = include __DIR__ . '/../vendor/autoload.php';

$psr4 = include __DIR__ . '/psr4.config.php';

foreach ($psr4 as $k => $vs) {
    foreach ($vs as $v) {
        $autoloader->addPsr4($k, $v);
    }
}

include __DIR__ . '/functions.global.php';

services()->set('autoloader', $autoloader)->set('eventManager', events())
    ->set('configManager', configs());

configs()->loadModularConfig();

events()->reset();
services()->reset();