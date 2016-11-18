<?php

namespace Auth;

$view = 'package/phpfox-module-auth/view';

return [
    'auth'    => [
        'adapters'  => [
            'password' => Adapter\PasswordAdapter::class,
            'ticket'   => Adapter\TicketAdapter::class,
        ],
        'passwords' => [
            'default' => Adapter\DefaultAuthPassword::class,
            'se'      => Adapter\SEAuthPassword::class,
            'fox'     => Adapter\FoxAuthPassword::class,
        ],
    ],
    'routes'  => [
        'login'         => [
            'uri'      => 'login',
            'defaults' => [
                'controller' => Controller\LoginController::class,
                'action'     => 'index',
            ],
        ],
        'logout'        => [
            'uri'      => 'logout',
            'defaults' => [
                'controller' => Controller\LogoutController::class,
                'action'     => 'index',
            ],
        ],
        'auth_password' => [
            'uri'      => 'password/<action>',
            'defaults' => [
                'controller' => Controller\LogoutController::class,
                'index'      => 'request',
            ],
        ],
    ],
    'widgets' => [
        'user.small-login'  => Widget\SmallLogin::class,
        'user.recent-login' => Widget\RecentLogin::class,
    ],
    'models'  => [
        'auth_password' => [
            Model\AuthPasswordTable::class,
            Model\AuthPassword::class,
        ],
        'auth_ticket'   => [
            Model\AuthTicketTable::class,
            Model\AuthTicket::class,
        ],
    ],
    'views'   => [
        'map' => [
            'user/recent/login'      => $view . '/widget/recent-login.phtml',
            'auth/login/index'       => $view . '/login/index.phtml',
            'auth/logout/index'      => $view . '/login/index.phtml',
            'auth/password/forgot'   => $view . '/password/forgot.phtml',
            'auth/password/recovery' => $view . '/password/recovery.phtml',
        ],
    ],
];