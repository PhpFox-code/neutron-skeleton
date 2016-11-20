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
            'auth'          => [
                0 => null,
                1 => 'Phpfox\\Auth\\AuthManager',
            ],
            'breadcrumb'    => [
                0 => null,
                1 => 'Phpfox\\Breadcrumb\\BreadcrumbManager',
            ],
            'cache'         => [
                0 => null,
                1 => 'Phpfox\\Cache\\CacheManager',
            ],
            'events'        => [
                0 => null,
                1 => 'Phpfox\\EventManager\\EventManager',
            ],
            'fileStorage'   => [
                0 => null,
                1 => 'Phpfox\\FileStorage\\FileStorageManager',
            ],
            'translator'    => [
                0 => null,
                1 => 'Phpfox\\I18n\\Translator',
            ],
            'log'           => [
                0 => null,
                1 => 'Phpfox\\Log\\LogManager',
            ],
            'mail'          => [
                0 => null,
                1 => 'Phpfox\\Mail\\MailService',
            ],
            'models'        => [
                0 => null,
                1 => 'Phpfox\\Model\\GatewayManager',
            ],
            'responder'     => [
                0 => null,
                1 => 'Phpfox\\Mvc\\Responder',
            ],
            'routing'       => [
                0 => null,
                1 => 'Phpfox\\Router\\RouteManager',
            ],
            'session'       => [
                0 => null,
                1 => 'Phpfox\\Session\\SessionManager',
            ],
            'phpRender'     => [
                0 => null,
                1 => 'Phpfox\\View\\PhpRenderer',
            ],
            'assets'        => [
                0 => null,
                1 => 'Phpfox\\ViewAsset\\AssetManager',
            ],
            'widgets'       => [
                0 => null,
                1 => 'Phpfox\\ViewWidget\\WidgetManager',
            ],
            'user.callback' => [
                0 => null,
                1 => 'User\\Service\\EventListener',
            ],
        ],
        'requireJs' => [
            0 => null,
            1 => 'Phpfox\\RequireJs\\RequireJs',
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
    'db'       => [
        'drivers' => [
            'mysqli' => 'Phpfox\\Mysqli\\MysqliAdapter',
        ],
    ],
    'events'   => [
        'listeners' => [
            'Phpfox\\RequireJs\\RequireJs' => [
                0 => 'onAssetManagerGetHeader',
                1 => 'onAssetManagerGetFooter',
            ],
            'user.callback'                => [
                0 => 'onBeforeLogin',
                1 => 'onAfterLogin',
                2 => 'onLoginSuccess',
                3 => 'onLoginFailure',
                4 => 'onBeforeUserCreate',
                5 => 'onAfterUserCreate',
                6 => 'onUserCreateSuccess',
                7 => 'onUserCreateFailure',
            ],
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
];