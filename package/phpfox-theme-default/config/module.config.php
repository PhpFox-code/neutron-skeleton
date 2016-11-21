<?php

namespace PhpfoxThemeDefault;

return [
    'psr4'     => [
        'PhpfoxThemeDefault\\' => [
            'package/phpfox-theme-default/src',
            'package/phpfox-theme-default/test',
        ],
    ],
    'services' => [
        'theme.listener' => [null, Listener\ThemeListener::class],
    ],
    'events'   => [
        'theme.listener' => ['onViewLayoutPrepare',],
    ],
    'views'    => [
        'layout/master/content' => 'package/phpfox-theme-default/layout/master/content.phtml',
        'layout/master/header'  => 'package/phpfox-theme-default/layout/master/header.phtml',
        'layout/master/footer'  => 'package/phpfox-theme-default/layout/master/footer.phtml',
        'layout/master/default' => 'package/phpfox-theme-default/layout/master/default.phtml',
        'layout/master/admin'   => 'package/phpfox-theme-default/layout/master/admin.phtml',
        'layout/master/404'     => 'package/phpfox-theme-default/layout/master/404.phtml',
    ],
];