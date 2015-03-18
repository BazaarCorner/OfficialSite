<?php

return [
    'modules' => [
        'BazaarSite'
    ],
    
    'module_listener_options' => [
        'config_glob_paths' => [
            '../../autoload/{,*.}{global,local}.php',
        ],
        'module_paths'      => [
            'module',
            'vendor'
        ]
    ]
];
