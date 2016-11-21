<?php

namespace User;

return [
    'psr4'           => [
        'User\\' => [
            'package/phpfox-module-user/src',
            'package/phpfox-module-user/test',
        ],
    ],
    'router.routes'         => [
        'profile/members' => [
            'route'    => '<name>/{members}',
            'filter'   => '@profile',
            'defaults' => [
                'controller' => Controller\IndexController::class,
                'action'     => 'index',
            ],
        ],
    ],
    'models'         => [
        'user' => [Model\UserTable::class, Model\User::class],
    ],
    'services'       => [
        'user.callback' => [null, Service\EventListener::class],
    ],
    'events'         => [
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