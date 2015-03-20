<?php

return [
    'modules' => [
        'BazaarSite',
        'BazaarMembership',
        'BazaarSubscription',
        'BazaarSocials',
        'BazaarCatalog',
        'BazaarOrders',
        'BazaarPayments',
        'BazaarShopping',
        'BazaarMarket'
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
