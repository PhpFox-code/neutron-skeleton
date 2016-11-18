<?php
namespace Core;

$view = 'package/phpfox-module-core/view/';

return [
    'views' => [
        'map' => [
            'core/error/error' => $view . 'error/error',
            'core/error/404'   => $view . 'error/404',
        ],
    ],
];