<?php

return [
    'autoload' => false,
    'hooks' => [
        'app_init' => [
            'crontab',
            'log',
        ],
    ],
    'route' => [],
    'priority' => [],
    'domain' => '',
];
