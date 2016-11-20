<?php

namespace Auth;

use Phpfox\Log\LogContainerFactory;

$view = 'package/phpfox-module-auth/view';

return [
    'psr4'           => [
        'Auth\\' => [
            'package/phpfox-module-auth/src',
            'package/phpfox-module-auth/test',
        ],
    ],
    'log.containers' => [
        'auth' => [
            [
                'driver'   => 'filesystem',
                'model'    => 'auth_log',
                'filename' => 'auth.log',
            ],
        ],
    ],
    'services'       => [
        'log.auth' => [LogContainerFactory::class, null, 'auth'],
    ],
    'auth.adapters'  => [
        'password' => Adapter\PasswordAdapter::class,
        'ticket'   => Adapter\TicketAdapter::class,
    ],
    'auth.passwords' => [
        'default' => Adapter\DefaultAuthPassword::class,
        'se'      => Adapter\SEAuthPassword::class,
        'fox'     => Adapter\FoxAuthPassword::class,
    ],
    'routes'         => [
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
            'wheres'   => [
                'action' => '(request|recovery|resend|confirm)',
            ],
            'defaults' => [
                'controller' => Controller\LogoutController::class,
                'index'      => 'request',
            ],
        ],
    ],
    'widgets'        => [
        'user.small-login'  => Widget\SmallLogin::class,
        'user.recent-login' => Widget\RecentLogin::class,
    ],
    'models'         => [
        'auth_password' => [
            Model\AuthPasswordTable::class,
            Model\AuthPassword::class,
        ],
        'auth_ticket'   => [
            Model\AuthTicketTable::class,
            Model\AuthTicket::class,
        ],
    ],
    'views'          => [
        'user/recent/login'      => $view . '/widget/recent-login.phtml',
        'auth/login/index'       => $view . '/login/index.phtml',
        'auth/logout/index'      => $view . '/login/index.phtml',
        'auth/password/forgot'   => $view . '/password/forgot.phtml',
        'auth/password/recovery' => $view . '/password/recovery.phtml',
    ],
];