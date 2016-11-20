<?php

namespace User;

return [
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
        'listeners' => [
            'user.callback' => [
                'onBeforeLogin',
                'onAfterLogin',
                'onLoginSuccess',
                'onLoginFailure',
                'onBeforeUserCreate',
                'onAfterUserCreate',
                'onUserCreateSuccess',
                'onUserCreateFailure',
            ],
        ],
    ],
];