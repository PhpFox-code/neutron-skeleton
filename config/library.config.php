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
        'auth'          => 'Phpfox\\Auth\\AuthManager',
        'breadcrumb'    => 'Phpfox\\Breadcrumb\\BreadcrumbManager',
        'cache'         => 'Phpfox\\Cache\\CacheManager',
        'events'        => 'Phpfox\\EventManager\\EventManager',
        'fileStorage'   => 'Phpfox\\FileStorage\\FileStorageManager',
        'translator'    => 'Phpfox\\I18n\\Translator',
        'log'           => 'Phpfox\\Log\\LogManager',
        'mail'          => 'Phpfox\\Mail\\MailService',
        'models'        => 'Phpfox\\Model\\GatewayManager',
        'responder'     => 'Phpfox\\Mvc\\Responder',
        'requireJs'     => 'Phpfox\\RequireJs\\RequireJs',
        'routing'       => 'Phpfox\\Router\\RouteManager',
        'services'      => 'Phpfox\\Service\\ServiceManager',
        'session'       => 'Phpfox\\Session\\SessionManager',
        'phpRender'     => 'Phpfox\\View\\PhpRenderer',
        'assets'        => 'Phpfox\\ViewAsset\\AssetManager',
        'widgets'       => 'Phpfox\\ViewWidget\\WidgetManager',
        'user.callback' => [
            0 => 'User\\Service\\EventListener',
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
        'onAssetManagerGetHeader' => 'Phpfox\\RequireJs\\RequireJs',
        'onAssetManagerGetFooter' => 'Phpfox\\RequireJs\\RequireJs',
        'listeners'               => [
            'user.callback' => [
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