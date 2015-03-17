<?php

return [
    'console'   => [], //routing configuration for CLI modules
    'router'    => [
        'routes' => [
            'home' => [
                'type'      => 'Literal',
                'options'   => [
                    'route'     => '/',
                    'defaults'  => [
                        'controller'    => 'Site\Controller\Index',
                        'action'        => 'index'
                    ]
                ],
                'may_terminate' => true,
                'child_routes' => [                    
                    // IndexController
                    'about' => [
                        'type'  => "Literal",
                        'options' => [
                            'route' => 'about',
                            'defaults' => [
                                'action'  => 'about',
                            ]
                        ]
                    ],
                    'help' => [
                        'type'  => "Literal",
                        'options' => [
                            'route' => 'help',
                            'defaults' => [
                                'action'  => 'help',
                            ]
                        ]
                    ],
                    'terms' => [
                        'type'  => "Literal",
                        'options' => [
                            'route' => 'terms_-and-_condition',
                            'defaults' => [
                                'action'  => 'terms-and-condition',
                            ]
                        ]
                    ],
                    'policy' => [
                        'type'  => "Literal",
                        'options' => [
                            'route' => 'privacy_policy',
                            'defaults' => [
                                'action'  => 'privacy-policy',
                            ]
                        ]
                    ],
                    'shipping' => [
                        'type'  => "Literal",
                        'options' => [
                            'route' => 'shipping_-and-_returns',
                            'defaults' => [
                                'action'  => 'shipping-and-return',
                            ]
                        ]
                    ],
//                    'contact' => [
//                        'type'  => "Literal",
//                        'options' => [
//                            'route' => 'contact',
//                            'defaults' => [
//                                'action'  => 'contact',
//                            ]
//                        ]
//                    ],
                ]
            ]
        ]
    ]
];