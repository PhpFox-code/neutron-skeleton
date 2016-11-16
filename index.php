<?php

include __DIR__ . '/config/global.constants.php';

$autoloader = include __DIR__ . '/vendor/autoload.php';

$log  = new \Phpfox\Log\FilesystemLogger(__DIR__ .'/data/log/main.log');

$log->info('con duong xua em di');