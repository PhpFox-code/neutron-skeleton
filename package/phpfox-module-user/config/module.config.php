<?php

namespace User;

return [
    'routes'   => [],
    'models'   => [
        'user' => [Model\UserTable::class, Model\User::class],
    ],
    'services' => [
        'user.callback' => [Service\EventListener::class],
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