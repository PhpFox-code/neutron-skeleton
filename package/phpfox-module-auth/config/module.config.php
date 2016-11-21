<?php

namespace Auth;

use Phpfox\Log\LoggerFactory;

$view = 'package/phpfox-module-auth/view';

return [
    'psr4'           => [
        'Auth\\' => [
            'package/phpfox-module-auth/src',
            'package/phpfox-module-auth/test',
        ],
    ],
    'log.containers' => [
        'log.auth' => [
            'driver' => 'db',
            'model'  => 'auth_log',
        ],
    ],
    'services'       => [
        'log.auth' => [LoggerFactory::class, null, 'log.auth'],
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
            'route'      => 'login',
            'defaults' => [
                'controller' => Controller\LoginController::class,
                'action'     => 'index',
            ],
        ],
        'logout'        => [
            'route'      => 'logout',
            'defaults' => [
                'controller' => Controller\LogoutController::class,
                'action'     => 'index',
            ],
        ],
        'auth_password' => [
            'route'      => 'password(/<action>)',
            'wheres'   => [
                'action' => '(request|recovery|resend|confirm)',
            ],
            'defaults' => [
                'controller' => Controller\PasswordController::class,
                'action'     => 'request',
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
            ':auth_password',
            null,
        ],
        'auth_ticket'   => [
            Model\AuthTicketTable::class,
            Model\AuthTicket::class,
            ':auth_ticket',
            null,
        ],
        'auth_log'      => [
            Model\AuthLogTable::class,
            Model\AuthLog::class,
            ':auth_log',
            null,
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