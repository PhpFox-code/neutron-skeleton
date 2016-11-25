<?php return [
    'auth.adapters'   => [
        'password' => 'Auth\\Adapter\\PasswordAdapter',
        'ticket'   => 'Auth\\Adapter\\TicketAdapter',
    ],
    'auth.passwords'  => [
        'default' => 'Auth\\Adapter\\DefaultAuthPassword',
        'se'      => 'Auth\\Adapter\\SEAuthPassword',
        'fox'     => 'Auth\\Adapter\\FoxAuthPassword',
    ],
    'cache.adapters'  => [
        'cache.filesystem' => [
            'driver' => 'filesystem',
        ],
        'cache.apc'        => [
            'driver' => 'apc',
        ],
        'cache.apcu'       => [
            'driver' => 'apcu',
        ],
        'cache.memcache'   => [
            'driver'         => 'memcache',
            'port'           => 11211,
            'timeout'        => 1,
            'persistent'     => true,
            'retry_interval' => 15,
            'servers'        => [
                0 => '127.0.0.1',
            ],
        ],
        'cache.memcached'  => [
            'driver'         => 'memcached',
            'port'           => 11211,
            'timeout'        => 1,
            'persistent'     => true,
            'retry_interval' => 15,
            'servers'        => [
                0 => '127.0.0.1',
            ],
        ],
    ],
    'cache.drivers'   => [
        'filesystem' => 'Phpfox\\Cache\\FilesystemCacheStorage',
        'apc'        => 'Phpfox\\Cache\\ApcCacheStorage',
        'apcu'       => 'Phpfox\\Cache\\ApcuCacheStorage',
        'memcache'   => 'Phpfox\\Memcache\\MemcacheCacheStorage',
        'memcached'  => 'Phpfox\\Memcache\\MemcachedCacheStorage',
    ],
    'db.drivers'      => [
        'mysqli' => 'Phpfox\\Mysqli\\MysqliAdapter',
    ],
    'events'          => [
        'requireJs'     => [
            0 => 'onAssetManagerGetHeader',
            1 => 'onAssetManagerGetFooter',
        ],
        'user.callback' => [
            0 => 'onBeforeLogin',
            1 => 'onAfterLogin',
            2 => 'onLoginSuccess',
            3 => 'onLoginFailure',
            4 => 'onBeforeUserCreate',
            5 => 'onUserCreateSuccess',
            6 => 'onUserCreateFailure',
        ],
    ],
    'forms.decorator' => [
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
    'forms.elements'  => [
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
    'html.container'  => [
        'title'           => [
            0 => null,
            1 => 'Phpfox\\Html\\HeadTitle',
        ],
        'headKeyword'     => [
            0 => null,
            1 => 'Phpfox\\Html\\HeadKeyword',
        ],
        'headMeta'        => [
            0 => null,
            1 => 'Phpfox\\Html\\HeadMeta',
        ],
        'openGraph'       => [
            0 => null,
            1 => 'Phpfox\\Html\\HeadOpenGraph',
        ],
        'links'           => [
            0 => null,
            1 => 'Phpfox\\Html\\HeadLink',
        ],
        'styles'          => [
            0 => null,
            1 => 'Phpfox\\Html\\ExternalStyle',
        ],
        'inlineStyles'    => [
            0 => null,
            1 => 'Phpfox\\Html\\InlineStyle',
        ],
        'script'          => [
            0 => null,
            1 => 'Phpfox\\Html\\ExternalScript',
        ],
        'startScript'     => [
            0 => null,
            1 => 'Phpfox\\Html\\InlineScript',
        ],
        'bootHtml'        => [
            0 => null,
            1 => 'Phpfox\\Html\\StaticHtml',
        ],
        'shutdownScripts' => [
            0 => null,
            1 => 'Phpfox\\Html\\InlineScript',
        ],
        'breadcrumb'      => [
            0 => null,
            1 => 'Phpfox\\Html\\Breadcrumb',
        ],
    ],
    'job.handlers'    => [
        'sample' => 'Phpfox\\Messaging\\SampleJobHandler',
    ],
    'log.container'   => [
        'jobs.log' => [
            0 => [
                'driver'   => 'filesystem',
                'filename' => 'jobs.log',
            ],
        ],
    ],
    'log.containers'  => [
        'log.auth' => [
            'driver' => 'db',
            'model'  => 'auth_log',
        ],
        'log.main' => [
            0 => [
                'driver'   => 'filesystem',
                'filename' => 'main.log',
            ],
        ],
    ],
    'log.drivers'     => [
        'filesystem' => 'Phpfox\\Log\\FilesystemLogger',
        'db'         => 'Phpfox\\Log\\DbLogger',
    ],
    'models'          => [
        'auth_password'   => [
            0 => 'Auth\\Model\\AuthPasswordTable',
            1 => 'Auth\\Model\\AuthPassword',
            2 => ':auth_password',
            3 => null,
        ],
        'auth_ticket'     => [
            0 => 'Auth\\Model\\AuthTicketTable',
            1 => 'Auth\\Model\\AuthTicket',
            2 => ':auth_ticket',
            3 => null,
        ],
        'auth_log'        => [
            0 => 'Auth\\Model\\AuthLogTable',
            1 => 'Auth\\Model\\AuthLog',
            2 => ':auth_log',
            3 => null,
        ],
        'session'         => [
            0 => 'Core\\Model\\CoreSessionTable',
            1 => 'Core\\Model\\CoreSession',
            2 => ':core_session',
            3 => null,
        ],
        'storage_service' => [
            0 => 'Core\\Model\\StorageServiceTable',
            1 => 'Core\\Model\\StorageService',
            2 => ':core_storage_service',
            3 => null,
        ],
        'user'            => [
            0 => 'User\\Model\\UserTable',
            1 => 'User\\Model\\User',
        ],
    ],
    'psr4'            => [
        'Auth\\'     => [
            0 => 'package/phpfox-auth/src',
            1 => 'package/phpfox-auth/test',
        ],
        'Core\\'     => [
            0 => 'package/phpfox-core/src',
            1 => 'package/phpfox-core/test',
        ],
        'Register\\' => [
            0 => 'package/phpfox-register/src',
            1 => 'package/phpfox-register/test',
        ],
        'User\\'     => [
            0 => 'package/phpfox-user/src',
            1 => 'package/phpfox-user/test',
        ],
    ],
    'router.filters'  => [
        '@profile' => [
            0 => null,
            1 => 'Phpfox\\Router\\ProfileNameFilter',
        ],
    ],
    'router.phrases'  => [],
    'router.routes'   => [
        'login'           => [
            'route'    => 'login',
            'defaults' => [
                'controller' => 'Auth\\Controller\\LoginController',
                'action'     => 'index',
            ],
        ],
        'logout'          => [
            'route'    => 'logout',
            'defaults' => [
                'controller' => 'Auth\\Controller\\LogoutController',
                'action'     => 'index',
            ],
        ],
        'auth_password'   => [
            'route'    => 'password(/<action>)',
            'wheres'   => [
                'action' => '(request|recovery|resend|confirm)',
            ],
            'defaults' => [
                'controller' => 'Auth\\Controller\\PasswordController',
                'action'     => 'request',
            ],
        ],
        'home'            => [
            'route'    => '/',
            'defaults' => [
                'controller' => 'Core\\Controller\\IndexController',
                'action'     => 'index',
            ],
        ],
        'admin'           => [
            'route'    => '{admincp}(/<action>)',
            'defaults' => [
                'controller' => 'Core\\Controller\\AdminIndexController',
                'action'     => 'index',
            ],
        ],
        'profile'         => [
            'route'    => '<name>',
            'filter'   => '@profile',
            'defaults' => [
                'controller' => 'Core\\Controller\\IndexController',
                'action'     => 'index',
            ],
        ],
        'register'        => [
            'route'    => 'register(/<step>)',
            'defaults' => [
                'controller' => 'Register\\Controller\\IndexController',
                'action'     => 'index',
                'step'       => '0',
            ],
        ],
        'profile/members' => [
            'route'    => '<name>/{members}',
            'filter'   => '@profile',
            'defaults' => [
                'controller' => 'User\\Controller\\IndexController',
                'action'     => 'index',
            ],
        ],
    ],
    'services'        => [
        'auth'            => [
            0 => null,
            1 => 'Phpfox\\Auth\\AuthManager',
        ],
        'log.auth'        => [
            0 => 'Phpfox\\Log\\LoggerFactory',
            1 => null,
            2 => 'log.auth',
        ],
        'cache.local'     => [
            0 => 'Phpfox\\Cache\\CacheStorageFactory',
            1 => null,
            2 => 'cache.filesystem',
        ],
        'cache.apc'       => [
            0 => 'Phpfox\\Cache\\CacheStorageFactory',
            1 => null,
            2 => 'cache.apc',
        ],
        'cache.apcu'      => [
            0 => 'Phpfox\\Cache\\CacheStorageFactory',
            1 => null,
            2 => 'cache.apcu',
        ],
        'cache'           => [
            0 => 'Phpfox\\Cache\\CacheStorageFactory',
            1 => null,
            2 => 'cache.filesystem',
        ],
        'cache.memcache'  => [
            0 => 'Phpfox\\Cache\\CacheStorageFactory',
            1 => null,
            2 => 'cache.memcache',
        ],
        'cache.memcached' => [
            0 => 'Phpfox\\Cache\\CacheStorageFactory',
            1 => null,
            2 => 'cache.memcached',
        ],
        'configManager'   => [
            0 => null,
            1 => 'Phpfox\\Config\\ConfigManager',
        ],
        'db'              => [
            0 => 'Phpfox\\Db\\AdapterFactory',
            1 => null,
            2 => 'default',
        ],
        'eventManager'    => [
            0 => null,
            1 => 'Phpfox\\EventManager\\EventManager',
        ],
        'html'            => [
            0 => null,
            1 => 'Phpfox\\Html\\HtmlFacades',
            2 => null,
        ],
        'translator'      => [
            0 => null,
            1 => 'Phpfox\\I18n\\Translator',
        ],
        'log.main'        => [
            0 => 'Phpfox\\Log\\LogContainerFactory',
            1 => null,
            2 => 'log.main',
        ],
        'mail'            => [
            0 => null,
            1 => 'Phpfox\\Mail\\MailService',
        ],
        'log.jobs'        => [
            0 => 'Phpfox\\Log\\LogContainerFactory',
            1 => null,
        ],
        'queues'          => [
            0 => null,
            1 => 'LocalQueueClass',
            2 => 'queues',
        ],
        'queues.01'       => [
            0 => null,
            1 => 'AwsSQS',
            2 => 'queue.01',
        ],
        'models'          => [
            0 => null,
            1 => 'Phpfox\\Model\\GatewayManager',
        ],
        'responder'       => [
            0 => null,
            1 => 'Phpfox\\Mvc\\Responder',
        ],
        'requester'       => [
            0 => null,
            1 => 'Phpfox\\Mvc\\Requester',
        ],
        'app'             => [
            0 => null,
            1 => 'Phpfox\\Mvc\\Application',
        ],
        'requireJs'       => [
            0 => null,
            1 => 'Phpfox\\RequireJs\\RequireJs',
        ],
        'router'          => [
            0 => null,
            1 => 'Phpfox\\Router\\RouteManager',
        ],
        'router.filters'  => [
            0 => null,
            1 => 'Phpfox\\Router\\FilterContainer',
        ],
        'serviceManager'  => [
            0 => null,
            1 => 'Phpfox\\Service\\ServiceManager',
        ],
        'session'         => [
            0 => 'Core\\Factory\\SessionManagerFactory',
            1 => null,
            2 => null,
        ],
        'storage'         => [
            0 => 'Core\\Factory\\StorageManagerFactory',
            1 => null,
            2 => null,
        ],
        'renderer'        => [
            0 => null,
            1 => 'Phpfox\\View\\PhpRenderer',
        ],
        'layout'          => [
            0 => null,
            1 => 'Phpfox\\View\\ViewLayout',
        ],
        'widgets'         => [
            0 => null,
            1 => 'Phpfox\\Widget\\WidgetManager',
        ],
        'core.module'     => [
            0 => null,
            1 => 'Core\\Module',
        ],
        'user.callback'   => [
            0 => null,
            1 => 'User\\Service\\EventListener',
        ],
    ],
    'session.adapter' => [
        'driver' => 'database',
    ],
    'session.drivers' => [
        'memcache'  => 'Phpfox\\Memcache\\MemcacheSessionSaveHandler',
        'memcached' => 'Phpfox\\Memcache\\MemcachedSessionSaveHandler',
        'database'  => 'Core\\Session\\DbSaveHandler',
    ],
    'storage.drivers' => [
        'local' => 'Phpfox\\Storage\\LocalStorageService',
        'ftp'   => 'Phpfox\\Storage\\FtpStorageService',
        'ssh2'  => 'Phpfox\\Storage\\Ssh2StorageService',
    ],
    'views'           => [
        'user/recent/login'      => 'package/phpfox-core/view/widget/recent-login.phtml',
        'auth/login/index'       => 'package/phpfox-core/view/login/index.phtml',
        'auth/logout/index'      => 'package/phpfox-core/view/login/index.phtml',
        'auth/password/forgot'   => 'package/phpfox-core/view/password/forgot.phtml',
        'auth/password/recovery' => 'package/phpfox-core/view/password/recovery.phtml',
        'layout/master/default'  => 'package/phpfox-core/view/layout/master/default',
        'layout/master/admin'    => 'package/phpfox-core/view/layout/master/default',
        'layout/partial/header'  => 'package/phpfox-core/view/layout/partial/header',
        'layout/partial/footer'  => 'package/phpfox-core/view/layout/partial/footer',
        'layout/partial/content' => 'package/phpfox-core/view/layout/partial/content',
        'core/error/error'       => 'package/phpfox-module-core/view/error/error.phtml',
        'core/error/404'         => 'package/phpfox-module-core/view/error/404.phtml',
        'register/index/index'   => 'package/phpfox-module-register/view/index/index.phtml',
    ],
    'widgets'         => [
        'user.small-login'  => 'Auth\\Widget\\SmallLogin',
        'user.recent-login' => 'Auth\\Widget\\RecentLogin',
    ],
];