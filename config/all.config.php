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
    'default' => 
    array (
      0 => 
      array (
        'driver' => 'filesystem',
        'filename' => 'main.log',
      ),
    ),
    'auth' => 
    array (
      0 => 
      array (
        'driver' => 'filesystem',
        'model' => 'auth_log',
        'filename' => 'auth.log',
      ),
    ),
  ),
  'log.drivers' => 
  array (
    'filesystem' => 'Phpfox\\Log\\FilesystemLogger',
  ),
  'models' => 
  array (
    'auth_password' => 
    array (
      0 => 'Auth\\Model\\AuthPasswordTable',
      1 => 'Auth\\Model\\AuthPassword',
    ),
    'auth_ticket' => 
    array (
      0 => 'Auth\\Model\\AuthTicketTable',
      1 => 'Auth\\Model\\AuthTicket',
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
      0 => 'package/src/phpfox-module-user/src',
      1 => 'package/src/phpfox-module-user/test',
    ),
  ),
  'routes' => 
  array (
    'login' => 
    array (
      'uri' => 'login',
      'defaults' => 
      array (
        'controller' => 'Auth\\Controller\\LoginController',
        'action' => 'index',
      ),
    ),
    'logout' => 
    array (
      'uri' => 'logout',
      'defaults' => 
      array (
        'controller' => 'Auth\\Controller\\LogoutController',
        'action' => 'index',
      ),
    ),
    'auth_password' => 
    array (
      'uri' => 'password/<action>',
      'wheres' => 
      array (
        'action' => '(request|recovery|resend|confirm)',
      ),
      'defaults' => 
      array (
        'controller' => 'Auth\\Controller\\LogoutController',
        'index' => 'request',
      ),
    ),
    'home' => 
    array (
      'uri' => '/',
      'defaults' => 
      array (
        'controller' => 'Core\\Controller\\IndexController',
        'action' => 'index',
      ),
    ),
    'register' => 
    array (
      'uri' => 'register(/<step>)',
      'defaults' => 
      array (
        'controller' => 'Register\\Controller\\IndexController',
        'action' => 'index',
        'step' => '0',
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
    'cache' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\Cache\\CacheManager',
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
    'log' => 
    array (
      0 => 'Phpfox\\Log\\LogContainerFactory',
      1 => NULL,
      2 => 'default',
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
    'routing' => 
    array (
      0 => NULL,
      1 => 'Phpfox\\Router\\RouteManager',
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
    'log.auth' => 
    array (
      0 => 'Phpfox\\Log\\LogContainerFactory',
      1 => NULL,
      2 => 'auth',
    ),
    'user.callback' => 
    array (
      0 => NULL,
      1 => 'User\\Service\\EventListener',
    ),
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
    'layout/default' => 'package/phpfox-theme-default/view/layout/default.phtml',
    'layout/admin' => 'package/phpfox-theme-default/view/layout/admin.phtml',
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