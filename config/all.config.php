<?php array (
  'auth.adapters' => 
  array (
    'password' => 'Auth\\Adapter\\PasswordAdapter',
    'ticket' => 'Auth\\Adapter\\TicketAdapter',
  ),
  'auth.passwords' => 
  array (
    'default' => 'Auth\\Adapter\\DefaultAuthPassword',
    'se' => 'Auth\\Adapter\\SEAuthPassword',
    'fox' => 'Auth\\Adapter\\FoxAuthPassword',
  ),
  'cache.adapters' => 
  array (
    'cache.filesystem' => 
    array (
      'driver' => 'filesystem',
    ),
    'cache.apc' => 
    array (
      'driver' => 'apc',
    ),
    'cache.apcu' => 
    array (
      'driver' => 'apcu',
    ),
    'cache.memcache' => 
    array (
      'driver' => 'memcache',
      'port' => 11211,
      'timeout' => 1,
      'persistent' => true,
      'retry_interval' => 15,
      'servers' => 
      array (
        0 => '127.0.0.1',
      ),
    ),
    'cache.memcached' => 
    array (
      'driver' => 'memcached',
      'port' => 11211,
      'timeout' => 1,
      'persistent' => true,
      'retry_interval' => 15,
      'servers' => 
      array (
        0 => '127.0.0.1',
      ),
    ),
  ),
  'cache.drivers' => 
  array (
    'filesystem' => 'Phpfox\\Cache\\FilesystemCacheStorage',
    'apc' => 'Phpfox\\Cache\\ApcCacheStorage',
    'apcu' => 'Phpfox\\Cache\\ApcuCacheStorage',
    'memcache' => 'Phpfox\\Cache\\MemcacheCacheStorage',
    'memcached' => 'Phpfox\\Cache\\MemcachedCacheStorage',
  ),
  'db.drivers' => 
  array (
    'mysqli' => 'Phpfox\\Mysqli\\MysqliAdapter',
  ),
  'events' => 
  array (
    'onAssetManagerGetHeader' => 
    array (
      0 => 'requireJs',
    ),
    'onAssetManagerGetFooter' => 
    array (
      0 => 'requireJs',
    ),
    'onBeforeLogin' => 
    array (
      0 => 'user.callback',
    ),
    'onAfterLogin' => 
    array (
      0 => 'user.callback',
    ),
    'onLoginSuccess' => 
    array (
      0 => 'user.callback',
    ),
    'onLoginFailure' => 
    array (
      0 => 'user.callback',
    ),
    'onBeforeUserCreate' => 
    array (
      0 => 'user.callback',
    ),
    'onUserCreateSuccess' => 
    array (
      0 => 'user.callback',
    ),
    'onUserCreateFailure' => 
    array (
      0 => 'user.callback',
    ),
    'onViewLayoutPrepare' => 
    array (
      0 => 'theme.listener',
    ),
  ),
  'forms.decorator' => 
  array (
    'button' => 'Phpfox\\Form\\Button',
    'checkbox' => 'Phpfox\\Form\\Checkbox',
    'multiCheckbox' => 'Phpfox\\Form\\MultiCheckbox',
    'colorPicker' => 'Phpfox\\Form\\ColorPicker',
    'editor' => 'Phpfox\\Form\\Editor',
    'file' => 'Phpfox\\Form\\FileUpload',
    'email' => 'Phpfox\\Form\\Email',
    'heading' => 'Phpfox\\Form\\Heading',
    'hidden' => 'Phpfox\\Form\\Hidden',
    'reset' => 'Phpfox\\Form\\Reset',
    'static' => 'Phpfox\\Form\\StaticText',
    'submit' => 'Phpfox\\Form\\Submit',
    'text' => 'Phpfox\\Form\\Text',
    'textarea' => 'Phpfox\\Form\\Textarea',
    'form' => 'Phpfox\\Form\\Form',
    'fieldset' => 'Phpfox\\Form\\Fieldset',
  ),
  'forms.elements' => 
  array (
    'button' => 'Phpfox\\Form\\Button',
    'checkbox' => 'Phpfox\\Form\\Checkbox',
    'multiCheckbox' => 'Phpfox\\Form\\MultiCheckbox',
    'colorPicker' => 'Phpfox\\Form\\ColorPicker',
    'editor' => 'Phpfox\\Form\\Editor',
    'file' => 'Phpfox\\Form\\FileUpload',
    'email' => 'Phpfox\\Form\\Email',
    'heading' => 'Phpfox\\Form\\Heading',
    'hidden' => 'Phpfox\\Form\\Hidden',
    'reset' => 'Phpfox\\Form\\Reset',
    'static' => 'Phpfox\\Form\\StaticText',
    'submit' => 'Phpfox\\Form\\Submit',
    'text' => 'Phpfox\\Form\\Text',
    'textarea' => 'Phpfox\\Form\\Textarea',
    'form' => 'Phpfox\\Form\\Form',
    'fieldset' => 'Phpfox\\Form\\Fieldset',
  ),
  'html_footer' => 
  array (
    'styles' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\ViewAsset\\ExternalStyle',
    ),
    'inline_styles' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\ViewAsset\\InlineStyle',
    ),
    'scripts' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\ViewAsset\\ExternalScript',
    ),
    'inline_scripts' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\ViewAsset\\InlineScript',
    ),
    'html_code' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\ViewAsset\\HtmlCode',
    ),
  ),
  'html_header' => 
  array (
    'title' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\ViewAsset\\HeadTitle',
    ),
    'keywords' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\ViewAsset\\HeadKeyword',
    ),
    'meta' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\ViewAsset\\HeadMeta',
    ),
    'open_graph' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\ViewAsset\\HeadOpenGraph',
    ),
    'links' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\ViewAsset\\HeadLink',
    ),
    'styles' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\ViewAsset\\ExternalStyle',
    ),
    'inline_styles' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\ViewAsset\\InlineStyle',
    ),
    'scripts' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\ViewAsset\\ExternalScript',
    ),
    'inline_scripts' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\ViewAsset\\InlineScript',
    ),
    'html_code' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\ViewAsset\\HtmlCode',
    ),
  ),
  'log.containers' => 
  array (
    'log.auth' => 
    array (
      'driver' => 'db',
      'model' => 'auth_log',
    ),
    'log.main' => 
    array (
      0 => 
      array (
        'driver' => 'filesystem',
        'filename' => 'main.log',
      ),
    ),
  ),
  'log.drivers' => 
  array (
    'filesystem' => 'Phpfox\\Log\\FilesystemLogger',
    'db' => 'Phpfox\\Log\\DbLogger',
  ),
  'models' => 
  array (
    'auth_password' => 
    array (
      0 => 'Auth\\Model\\AuthPasswordTable',
      1 => 'Auth\\Model\\AuthPassword',
      2 => ':auth_password',
      3 => NULL,
    ),
    'auth_ticket' => 
    array (
      0 => 'Auth\\Model\\AuthTicketTable',
      1 => 'Auth\\Model\\AuthTicket',
      2 => ':auth_ticket',
      3 => NULL,
    ),
    'auth_log' => 
    array (
      0 => 'Auth\\Model\\AuthLogTable',
      1 => 'Auth\\Model\\AuthLog',
      2 => ':auth_log',
      3 => NULL,
    ),
    'core_session' => 
    array (
      0 => 'Core\\Model\\CoreSessionTable',
      1 => 'Core\\Model\\CoreSession',
      2 => ':core_session',
      3 => NULL,
    ),
    'user' => 
    array (
      0 => 'User\\Model\\UserTable',
      1 => 'User\\Model\\User',
    ),
  ),
  'psr4' => 
  array (
    'Auth\\' => 
    array (
      0 => 'package/phpfox-module-auth/src',
      1 => 'package/phpfox-module-auth/test',
    ),
    'Blog\\' => 
    array (
      0 => 'package/phpfox-module-blog/src',
      1 => 'package/phpfox-module-blog/test',
    ),
    'Core\\' => 
    array (
      0 => 'package/phpfox-module-core/src',
      1 => 'package/phpfox-module-core/test',
    ),
    'Register\\' => 
    array (
      0 => 'package/phpfox-module-register/src',
      1 => 'package/phpfox-module-register/test',
    ),
    'User\\' => 
    array (
      0 => 'package/phpfox-module-user/src',
      1 => 'package/phpfox-module-user/test',
    ),
    'PhpfoxThemeDefault\\' => 
    array (
      0 => 'package/phpfox-theme-default/src',
      1 => 'package/phpfox-theme-default/test',
    ),
  ),
  'router.filters' => 
  array (
    '@profile' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\Router\\ProfileNameFilter',
    ),
  ),
  'router.phrases' => 
  array (
  ),
  'router.routes' => 
  array (
    'login' => 
    array (
      'route' => 'login',
      'defaults' => 
      array (
        'controller' => 'Auth\\Controller\\LoginController',
        'action' => 'index',
      ),
    ),
    'logout' => 
    array (
      'route' => 'logout',
      'defaults' => 
      array (
        'controller' => 'Auth\\Controller\\LogoutController',
        'action' => 'index',
      ),
    ),
    'auth_password' => 
    array (
      'route' => 'password(/<action>)',
      'wheres' => 
      array (
        'action' => '(request|recovery|resend|confirm)',
      ),
      'defaults' => 
      array (
        'controller' => 'Auth\\Controller\\PasswordController',
        'action' => 'request',
      ),
    ),
    'home' => 
    array (
      'route' => '/',
      'defaults' => 
      array (
        'controller' => 'Core\\Controller\\IndexController',
        'action' => 'index',
      ),
    ),
    'admin' => 
    array (
      'route' => '{admincp}(/<action>)',
      'defaults' => 
      array (
        'controller' => 'Core\\Controller\\AdminIndexController',
        'action' => 'index',
      ),
    ),
    'profile' => 
    array (
      'route' => '<name>',
      'filter' => '@profile',
      'defaults' => 
      array (
        'controller' => 'Core\\Controller\\IndexController',
        'action' => 'index',
      ),
    ),
    'register' => 
    array (
      'route' => 'register(/<step>)',
      'defaults' => 
      array (
        'controller' => 'Register\\Controller\\IndexController',
        'action' => 'index',
        'step' => '0',
      ),
    ),
    'profile/members' => 
    array (
      'route' => '<name>/{members}',
      'filter' => '@profile',
      'defaults' => 
      array (
        'controller' => 'User\\Controller\\IndexController',
        'action' => 'index',
      ),
    ),
  ),
  'services' => 
  array (
    'auth' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\Auth\\AuthManager',
    ),
    'log.auth' => 
    array (
      0 => 'Phpfox\\Log\\LoggerFactory',
      1 => NULL,
      2 => 'log.auth',
    ),
    'cache.local' => 
    array (
      0 => 'Phpfox\\Cache\\CacheFactory',
      1 => NULL,
      2 => 'cache.filesystem',
    ),
    'cache.apc' => 
    array (
      0 => 'Phpfox\\Cache\\CacheFactory',
      1 => NULL,
      2 => 'cache.apc',
    ),
    'cache.apcu' => 
    array (
      0 => 'Phpfox\\Cache\\CacheFactory',
      1 => NULL,
      2 => 'cache.apcu',
    ),
    'cache' => 
    array (
      0 => 'Phpfox\\Cache\\CacheFactory',
      1 => NULL,
      2 => 'cache.filesystem',
    ),
    'cache.memcache' => 
    array (
      0 => 'Phpfox\\Cache\\CacheFactory',
      1 => NULL,
      2 => 'cache.memcache',
    ),
    'cache.memcached' => 
    array (
      0 => 'Phpfox\\Cache\\CacheFactory',
      1 => NULL,
      2 => 'cache.memcached',
    ),
    'configManager' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\Config\\ConfigManager',
    ),
    'db' => 
    array (
      0 => 'Phpfox\\Db\\AdapterFactory',
      1 => NULL,
      2 => 'default',
    ),
    'eventManager' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\EventManager\\EventManager',
    ),
    'fileStorage' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\FileStorage\\FileStorageManager',
    ),
    'translator' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\I18n\\Translator',
    ),
    'log.main' => 
    array (
      0 => 'Phpfox\\Log\\LogContainerFactory',
      1 => NULL,
      2 => 'log.main',
    ),
    'mail' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\Mail\\MailService',
    ),
    'models' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\Model\\GatewayManager',
    ),
    'responder' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\Mvc\\Responder',
    ),
    'requester' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\Mvc\\Requester',
    ),
    'app' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\Mvc\\Application',
    ),
    'requireJs' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\RequireJs\\RequireJs',
    ),
    'router' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\Router\\RouteManager',
    ),
    'router.filters' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\Router\\FilterContainer',
    ),
    'serviceManager' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\Service\\ServiceManager',
    ),
    'session' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\Session\\SessionManager',
    ),
    'renderer' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\View\\PhpRenderer',
    ),
    'layout' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\View\\ViewLayout',
    ),
    'breadcrumb' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\ViewAsset\\Breadcrumb',
    ),
    'html_header' => 
    array (
      0 => 'Phpfox\\ViewAsset\\AssetContainerFactory',
      1 => 'Phpfox\\ViewAsset\\AssetContainer',
      2 => 'html_header',
    ),
    'html_footer' => 
    array (
      0 => 'Phpfox\\ViewAsset\\AssetContainerFactory',
      1 => 'Phpfox\\ViewAsset\\AssetContainer',
      2 => 'html_footer',
    ),
    'head.title' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\ViewAsset\\HeadTitle',
    ),
    'head.meta' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\ViewAsset\\HeadMeta',
    ),
    'head.open_graph' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\ViewAsset\\HeadOpenGraph',
    ),
    'head.links' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\ViewAsset\\HeadLink',
    ),
    'html_code.start' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\ViewAsset\\HtmlCode',
    ),
    'html_code.shutdown' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\ViewAsset\\HtmlCode',
    ),
    'external_scripts.start' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\ViewAsset\\ExternalScript',
    ),
    'inline_scripts.start' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\ViewAsset\\InlineScript',
    ),
    'external_styles.start' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\ViewAsset\\ExternalStyle',
    ),
    'inline_styles.start' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\ViewAsset\\InlineStyle',
    ),
    'head.keywords' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\ViewAsset\\HeadKeyword',
    ),
    'inline_scripts.shutdown' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\ViewAsset\\InlineScript',
    ),
    'external_scripts.shutdown' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\ViewAsset\\ExternalScript',
    ),
    'inline_styles.shutdown' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\ViewAsset\\InlineStyle',
    ),
    'widgets' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\ViewWidget\\WidgetManager',
    ),
    'user.callback' => 
    array (
      0 => NULL,
      1 => 'User\\Service\\EventListener',
    ),
    'theme.listener' => 
    array (
      0 => NULL,
      1 => 'PhpfoxThemeDefault\\Listener\\ThemeListener',
    ),
  ),
  'session.adapter' => 
  array (
    'driver' => 'database',
  ),
  'session.drivers' => 
  array (
    'files' => 'files',
    'database' => 'Core\\Session\\DbSaveHandler',
  ),
  'views' => 
  array (
    'user/recent/login' => 'package/phpfox-module-auth/view/widget/recent-login.phtml',
    'auth/login/index' => 'package/phpfox-module-auth/view/login/index.phtml',
    'auth/logout/index' => 'package/phpfox-module-auth/view/login/index.phtml',
    'auth/password/forgot' => 'package/phpfox-module-auth/view/password/forgot.phtml',
    'auth/password/recovery' => 'package/phpfox-module-auth/view/password/recovery.phtml',
    'core/error/error' => 'package/phpfox-module-core/view/error/error.phtml',
    'core/error/404' => 'package/phpfox-module-core/view/error/404.phtml',
    'register/index/index' => 'package/phpfox-module-register/view/index/index.phtml',
    'layout/master/content' => 'package/phpfox-theme-default/layout/master/content.phtml',
    'layout/master/header' => 'package/phpfox-theme-default/layout/master/header.phtml',
    'layout/master/footer' => 'package/phpfox-theme-default/layout/master/footer.phtml',
    'layout/master/default' => 'package/phpfox-theme-default/layout/master/default.phtml',
    'layout/master/admin' => 'package/phpfox-theme-default/layout/master/admin.phtml',
    'layout/master/404' => 'package/phpfox-theme-default/layout/master/404.phtml',
  ),
  'widgets' => 
  array (
    'user.small-login' => 'Auth\\Widget\\SmallLogin',
    'user.recent-login' => 'Auth\\Widget\\RecentLogin',
  ),
  'db.adapters' => 
  array (
    'default' => 
    array (
      'driver' => 'mysqli',
      'host' => '127.0.0.1',
      'port' => 3306,
      'user' => 'root',
      'password' => 'namnv123',
      'database' => 'phpfox_v5',
      'socket' => NULL,
    ),
  ),
);