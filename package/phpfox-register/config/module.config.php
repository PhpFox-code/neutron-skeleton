<?php

namespace Register;

return [
    'psr4'   => [
        'Register\\' => [
            'package/phpfox-register/src',
            'package/phpfox-register/test',
        ],
    ],
    'router.routes' => [
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