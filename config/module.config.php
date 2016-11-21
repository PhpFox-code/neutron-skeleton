<?php array (
  'psr4' => 
  array (
    'Core\\' => 
    array (
      0 => 'package/src/phpfox-module-core/src',
      1 => 'package/src/phpfox-module-core/test',
    ),
    'User\\' => 
    array (
      0 => 'package/src/phpfox-module-user/src',
      1 => 'package/src/phpfox-module-user/test',
    ),
    'Blog\\' => 
    array (
      0 => 'package/phpfox-module-blog/src',
      1 => 'package/phpfox-module-blog/test',
    ),
  ),
  'views' => 
  array (
    'map' => 
    array (
      'core/error/error' => 'package/phpfox-module-core/view/error/error',
      'core/error/404' => 'package/phpfox-module-core/view/error/404',
      'user/recent/login' => 'package/phpfox-module-auth/view/widget/recent-login.phtml',
      'auth/login/index' => 'package/phpfox-module-auth/view/login/index.phtml',
      'auth/logout/index' => 'package/phpfox-module-auth/view/login/index.phtml',
      'auth/password/forgot' => 'package/phpfox-module-auth/view/password/forgot.phtml',
      'auth/password/recovery' => 'package/phpfox-module-auth/view/password/recovery.phtml',
    ),
  ),
  'router.routes' =>
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
      'defaults' => 
      array (
        'controller' => 'Auth\\Controller\\LogoutController',
        'index' => 'request',
      ),
    ),
  ),
  'models' => 
  array (
    'user' => 
    array (
      0 => 'User\\Model\\UserTable',
      1 => 'User\\Model\\User',
    ),
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
  ),
  'services' => 
  array (
    'map' => 
    array (
      'user.callback' => 
      array (
        0 => NULL,
        1 => 'User\\Service\\EventListener',
      ),
    ),
  ),
  'events' => 
  array (
    'map' => 
    array (
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
  ),
  'auth' => 
  array (
    'adapters' => 
    array (
      'password' => 'Auth\\Adapter\\PasswordAdapter',
      'ticket' => 'Auth\\Adapter\\TicketAdapter',
    ),
    'passwords' => 
    array (
      'default' => 'Auth\\Adapter\\DefaultAuthPassword',
      'se' => 'Auth\\Adapter\\SEAuthPassword',
      'fox' => 'Auth\\Adapter\\FoxAuthPassword',
    ),
  ),
  'widgets' => 
  array (
    'user.small-login' => 'Auth\\Widget\\SmallLogin',
    'user.recent-login' => 'Auth\\Widget\\RecentLogin',
  ),
);