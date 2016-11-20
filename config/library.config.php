<?php return [
    'auth'     => [
        'adapters'  => [
            'password' => 'Auth\\Adapter\\PasswordAdapter',
            'ticket'   => 'Auth\\Adapter\\TicketAdapter',
        ],
        'passwords' => [
            'default' => 'Auth\\Adapter\\DefaultAuthPassword',
            'se'      => 'Auth\\Adapter\\SEAuthPassword',
            'fox'     => 'Auth\\Adapter\\FoxAuthPassword',
        ],
    ],
    'services' => [
        'map'       => [
            'auth'           => [
                0 => null,
                1 => 'Phpfox\\Auth\\AuthManager',
            ],
            'breadcrumb'     => [
                0 => null,
                1 => 'Phpfox\\Breadcrumb\\BreadcrumbManager',
            ],
            'cache'          => [
                0 => null,
                1 => 'Phpfox\\Cache\\CacheManager',
            ],
            'configManager'  => [
                0 => null,
                1 => 'Phpfox\\Config\\ConfigManager',
            ],
            'db'             => [
                0 => 'Phpfox\\Db\\AdapterFactory',
                1 => null,
                2 => 'default',
            ],
            'eventManager'   => [
                0 => null,
                1 => 'Phpfox\\EventManager\\EventManager',
            ],
            'fileStorage'    => [
                0 => null,
                1 => 'Phpfox\\FileStorage\\FileStorageManager',
            ],
            'translator'     => [
                0 => null,
                1 => 'Phpfox\\I18n\\Translator',
            ],
            'log'            => [
                0 => 'Phpfox\\Log\\LogContainerFactory',
                1 => null,
                2 => 'default',
            ],
            'mail'           => [
                0 => null,
                1 => 'Phpfox\\Mail\\MailService',
            ],
            'models'         => [
                0 => null,
                1 => 'Phpfox\\Model\\GatewayManager',
            ],
            'responder'      => [
                0 => null,
                1 => 'Phpfox\\Mvc\\Responder',
            ],
            'routing'        => [
                0 => null,
                1 => 'Phpfox\\Router\\RouteManager',
            ],
            'serviceManager' => [
                0 => null,
                1 => 'Phpfox\\Service\\ServiceManager',
            ],
            'session'        => [
                0 => null,
                1 => 'Phpfox\\Session\\SessionManager',
            ],
            'phpRender'      => [
                0 => null,
                1 => 'Phpfox\\View\\PhpRenderer',
            ],
            'assets'         => [
                0 => null,
                1 => 'Phpfox\\ViewAsset\\AssetManager',
            ],
            'widgets'        => [
                0 => null,
                1 => 'Phpfox\\ViewWidget\\WidgetManager',
            ],
            'user.callback'  => [
                0 => null,
                1 => 'User\\Service\\EventListener',
            ],
        ],
        'requireJs' => [
            0 => null,
            1 => 'Phpfox\\RequireJs\\RequireJs',
        ],
    ],
    'events'   => [
        'map' => [
            'eventManager'               => [
                0 => 'onApplicationConfigChanged',
            ],
            'onAssetManagerGetHeader'    => [
                0 => 'eventManager',
                1 => 'requireJs',
            ],
            'onAssetManagerGetFooter'    => [
                0 => 'eventManager',
                1 => 'requireJs',
            ],
            'onApplicationConfigChanged' => [
                0 => 'serviceManager',
            ],
            'onBeforeLogin'              => [
                0 => 'user.callback',
            ],
            'onAfterLogin'               => [
                0 => 'user.callback',
            ],
            'onLoginSuccess'             => [
                0 => 'user.callback',
            ],
            'onLoginFailure'             => [
                0 => 'user.callback',
            ],
            'onBeforeUserCreate'         => [
                0 => 'user.callback',
            ],
            'onUserCreateSuccess'        => [
                0 => 'user.callback',
            ],
            'onUserCreateFailure'        => [
                0 => 'user.callback',
            ],
        ],
    ],
    'forms'    => [
        'elements'   => [
            'button'        => 'Phpfox\\Form\\Button',
            'checkbox'      => 'Phpfox\\Form\\Checkbox',
            'multiCheckbox' => 'Phpfox\\Form\\MultiCheckbox',
            'colorPicker'   => 'Phpfox\\Form\\ColorPicker',
            'editor'        => 'Phpfox\\Form\\Editor',
            'file'          => 'Phpfox\\Form\\FileUpload',
            'email'         => 'Phpfox\\Form\\Email',
            'heading'       => 'Phpfox\\Form\\Heading',
            'hidden'        => 'Phpfox\\Form\\Hidden',
            'reset'         => 'Phpfox\\Form\\Reset',
            'static'        => 'Phpfox\\Form\\StaticText',
            'submit'        => 'Phpfox\\Form\\Submit',
            'text'          => 'Phpfox\\Form\\Text',
            'textarea'      => 'Phpfox\\Form\\Textarea',
            'form'          => 'Phpfox\\Form\\Form',
            'fieldset'      => 'Phpfox\\Form\\Fieldset',
        ],
        'decorators' => [
            'button'        => 'Phpfox\\Form\\Button',
            'checkbox'      => 'Phpfox\\Form\\Checkbox',
            'multiCheckbox' => 'Phpfox\\Form\\MultiCheckbox',
            'colorPicker'   => 'Phpfox\\Form\\ColorPicker',
            'editor'        => 'Phpfox\\Form\\Editor',
            'file'          => 'Phpfox\\Form\\FileUpload',
            'email'         => 'Phpfox\\Form\\Email',
            'heading'       => 'Phpfox\\Form\\Heading',
            'hidden'        => 'Phpfox\\Form\\Hidden',
            'reset'         => 'Phpfox\\Form\\Reset',
            'static'        => 'Phpfox\\Form\\StaticText',
            'submit'        => 'Phpfox\\Form\\Submit',
            'text'          => 'Phpfox\\Form\\Text',
            'textarea'      => 'Phpfox\\Form\\Textarea',
            'form'          => 'Phpfox\\Form\\Form',
            'fieldset'      => 'Phpfox\\Form\\Fieldset',
        ],
    ],
    'log'      => [
        'drivers'    => [
            'filesystem' => 'Phpfox\\Log\\FilesystemLogger',
        ],
        'containers' => [
            'default' => [
                0 => [
                    'driver'   => 'filesystem',
                    'filename' => 'main.log',
                ],
            ],
        ],
    ],
    'db'       => [
        'drivers' => [
            'mysqli' => 'Phpfox\\Mysqli\\MysqliAdapter',
        ],
    ],
    'routes'   => [
        'login'         => [
            'uri'      => 'login',
            'defaults' => [
                'controller' => 'Auth\\Controller\\LoginController',
                'action'     => 'index',
            ],
        ],
        'logout'        => [
            'uri'      => 'logout',
            'defaults' => [
                'controller' => 'Auth\\Controller\\LogoutController',
                'action'     => 'index',
            ],
        ],
        'auth_password' => [
            'uri'      => 'password/<action>',
            'defaults' => [
                'controller' => 'Auth\\Controller\\LogoutController',
                'index'      => 'request',
            ],
        ],
        'register'      => [
            'uri'      => 'register(/<step>)',
            'defaults' => [
                'controller' => 'Register\\Controller\\IndexController',
                'action'     => 'index',
                'step'       => '0',
            ],
        ],
    ],
    'widgets'  => [
        'user.small-login'  => 'Auth\\Widget\\SmallLogin',
        'user.recent-login' => 'Auth\\Widget\\RecentLogin',
    ],
    'models'   => [
        'auth_password' => [
            0 => 'Auth\\Model\\AuthPasswordTable',
            1 => 'Auth\\Model\\AuthPassword',
        ],
        'auth_ticket'   => [
            0 => 'Auth\\Model\\AuthTicketTable',
            1 => 'Auth\\Model\\AuthTicket',
        ],
        'user'          => [
            0 => 'User\\Model\\UserTable',
            1 => 'User\\Model\\User',
        ],
    ],
    'views'    => [
        'map' => [
            'user/recent/login'      => 'package/phpfox-module-auth/view/widget/recent-login.phtml',
            'auth/login/index'       => 'package/phpfox-module-auth/view/login/index.phtml',
            'auth/logout/index'      => 'package/phpfox-module-auth/view/login/index.phtml',
            'auth/password/forgot'   => 'package/phpfox-module-auth/view/password/forgot.phtml',
            'auth/password/recovery' => 'package/phpfox-module-auth/view/password/recovery.phtml',
            'core/error/error'       => 'package/phpfox-module-core/view/error/error',
            'core/error/404'         => 'package/phpfox-module-core/view/error/404',
            'register/index/index'   => 'package/phpfox-module-register/view/index/index.phtml',
            'layout/default'         => 'package/phpfox-theme-default/view/layout/default.phtml',
            'layout/admin'           => 'package/phpfox-theme-default/view/layout/admin.phtml',
        ],
    ],
    'psr4'     => [
        'Blog\\' => [
            0 => 'package/phpfox-module-blog/src',
            1 => 'package/phpfox-module-blog/test',
        ],
        'Core\\' => [
            0 => 'package/src/phpfox-module-core/src',
            1 => 'package/src/phpfox-module-core/test',
        ],
        'User\\' => [
            0 => 'package/src/phpfox-module-user/src',
            1 => 'package/src/phpfox-module-user/test',
        ],
    ],
];