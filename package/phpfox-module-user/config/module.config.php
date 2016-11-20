<?php

namespace User;

return [
    'psr4'     => [
        'User\\' => [
            'package/src/phpfox-module-user/src',
            'package/src/phpfox-module-user/test',
        ],
    ],
    'routes'   => [],
    'models'   => [
        'user' => [Model\UserTable::class, Model\User::class],
    ],
    'services' => [
        'map' => [
            'user.callback' => [null, Service\EventListener::class],
        ],
    ],
    'events'   => [
        'map' => [
            'onBeforeLogin'       => ['user.callback'],
            'onAfterLogin'        => ['user.callback'],
            'onLoginSuccess'      => ['user.callback'],
            'onLoginFailure'      => ['user.callback'],
            'onBeforeUserCreate'  => ['user.callback'],
            'onUserCreateSuccess' => ['user.callback'],
            'onUserCreateFailure' => ['user.callback'],
        ],
    ],
];