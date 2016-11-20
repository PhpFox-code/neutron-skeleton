<?php

include __DIR__ . '/constants.global.php';

$autoloader = include __DIR__ . '/../vendor/autoload.php';

services()->set('autoloader', $autoloader)->set('eventManager', events())
    ->set('configManager', configs());

configs()->loadModularConfig();

events()->reset();
services()->reset();