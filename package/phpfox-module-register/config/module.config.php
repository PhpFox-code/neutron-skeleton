<?php

namespace Register;

$view = 'package/phpfox-module-register/view';

return [
    'routes' => [
        'register' => [
            'uri'      => 'register',
            'defaults' => [
                'controller' => Controller\IndexController::class,
                'action'     => 'index',
            ],
        ],
    ],
    'views'  => [
        'map' => [
            'register/index/index' => $view . '/index/index.phtml',
        ],
    ],
];