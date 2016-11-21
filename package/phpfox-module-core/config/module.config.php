<?php
namespace Core;

use Core\Controller\AdminIndexController;

return [
    'psr4'   => [
        'Core\\' => [
            'package/phpfox-module-core/src',
            'package/phpfox-module-core/test',
        ],
    ],
    'routes' => [
        'home'    => [
            'route'      => '/',
            'defaults' => [
                'controller' => Controller\IndexController::class,
                'action'     => 'index',
            ],
        ],
        'admin'   => [
            'route'      => '{admincp}(/<action>)',
            'defaults' => [
                'controller' => AdminIndexController::class,
                'action'     => 'index',
            ],

        ],
        'profile' => [
            'route'      => '<name>',
            'filter'   => '@profile',
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