<?php

namespace Register;

return [
    'routes' => [
        'register' => [
            'uri'      => 'register(/<step>)',
            'defaults' => [
                'controller' => Controller\IndexController::class,
                'action'     => 'index',
                'step'       => '0',
            ],
        ],
    ],
    'views'  => [
        'map' => [
            'register/index/index' => 'package/phpfox-module-register/view/index/index.phtml',
        ],
    ],
];