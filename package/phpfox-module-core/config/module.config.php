<?php
namespace Core;

return [
    'psr4'   => [
        'Core\\' => [
            'package/phpfox-module-core/src',
            'package/phpfox-module-core/test',
        ],
    ],
    'routes' => [
        'home' => [
            'uri'      => '/',
            'defaults' => [
                'controller' => Controller\IndexController::class,
                'action'     => 'index',
            ],
        ],
    ],
    'views'  => [
        'core/error/error' => 'package/phpfox-module-core/view/error/error.phtml',
        'core/error/404'   => 'package/phpfox-module-core/view/error/404.phtml',
    ],
];