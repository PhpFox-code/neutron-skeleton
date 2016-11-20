<?php

include __DIR__ . '/config/bootstrap.php';


$log = new \Phpfox\Log\FilesystemLogger(['filename' => 'main.log']);

$log->info('con duong xua em di');