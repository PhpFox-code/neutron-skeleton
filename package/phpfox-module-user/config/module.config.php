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
        'user.callback' => [null, Service\EventListener::class],
    ],
    'events'   => [
        'user.callback' => [
            'onBeforeLogin',
            'onAfterLogin',
            'onLoginSuccess',
            'onLoginFailure',
            'onBeforeUserCreate',
            'onUserCreateSuccess',
            'onUserCreateFailure',
        ],
    ],
];