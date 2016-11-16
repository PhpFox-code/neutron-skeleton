<?php

return [
    'aliases'   => [
        'Responder' => 'Phpfox\Mvc\Responder',
    ],
    'factories' => [
        'database' => 'Phpfox\Db\AdapterFactory',
        'cache'    => 'Phpfox\Cache\CacheFactory',
        'service'  => 'Phpfox\Service\ServiceManagerFactory',
        'log'      => 'Phpfox\Log\LogManagerFactory',
    ],
    'templates' => [
        'authentication/login/index'  => 'module/phpfox/authentication/login/index',
        'authentication/logout/index' => 'module/phpfox/authentication/logout/index',
        'core/index/index'            => 'module/phpfox/core/index/index',
    ],
];