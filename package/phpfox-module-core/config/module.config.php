<?php
namespace Core;

$view = 'package/phpfox-module-core/view/';

return [
    'psr4'  => [
        'Core\\' => [
            'package/src/phpfox-module-core/src',
            'package/src/phpfox-module-core/test',
        ],
    ],
    'views' => [
        'map' => [
            'core/error/error' => $view . 'error/error',
            'core/error/404'   => $view . 'error/404',
        ],
    ],
];