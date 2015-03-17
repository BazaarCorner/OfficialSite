<?php

return [
    'modules' => [
        'Site'
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
