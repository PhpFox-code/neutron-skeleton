<?php

namespace Register;

return [
    'psr4'   => [
        'Register\\' => [
            'package/phpfox-module-register/src',
            'package/phpfox-module-register/test',
        ],
    ],
    'routes' => [
        'register' => [
            'route'      => 'register(/<step>)',
            'defaults' => [
                'controller' => Controller\IndexController::class,
                'action'     => 'index',
                'step'       => '0',
            ],
        ],
    ],
    'views'  => [
        'register/index/index' => 'package/phpfox-module-register/view/index/index.phtml',
    ],
];