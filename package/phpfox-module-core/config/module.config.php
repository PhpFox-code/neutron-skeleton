<?php
namespace Core;

use Core\Controller\AdminIndexController;

return [
    'psr4'            => [
        'Core\\' => [
            'package/phpfox-module-core/src',
            'package/phpfox-module-core/test',
        ],
    ],
    'session.drivers' => [
        'database' => Session\DbSaveHandler::class,
    ],
    'session.adapter' => [
        'driver' => 'database',
    ],
    'services'        => [
        'storage' => [Factory\StorageManagerFactory::class, null, null],
        'session' => [Factory\SessionManagerFactory::class, null, null],
    ],
    'router.routes'   => [
        'home'    => [
            'route'    => '/',
            'defaults' => [
                'controller' => Controller\IndexController::class,
                'action'     => 'index',
            ],
        ],
        'admin'   => [
            'route'    => '{admincp}(/<action>)',
            'defaults' => [
                'controller' => AdminIndexController::class,
                'action'     => 'index',
            ],

        ],
        'profile' => [
            'route'    => '<name>',
            'filter'   => '@profile',
            'defaults' => [
                'controller' => Controller\IndexController::class,
                'action'     => 'index',
            ],
        ],
    ],
    'models'          => [
        'session'         => [
            Model\CoreSessionTable::class,
            Model\CoreSession::class,
            ':core_session',
            null,
        ],
        'storage_service' => [
            Model\StorageServiceTable::class,
            Model\StorageService::class,
            ':core_storage_service',
            null,
        ],
    ],
    'views'           => [
        'core/error/error' => 'package/phpfox-module-core/view/error/error.phtml',
        'core/error/404'   => 'package/phpfox-module-core/view/error/404.phtml',
    ],
];