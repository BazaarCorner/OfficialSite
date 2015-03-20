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
                        'controller'    => 'BazaarSite\Controller\Index',
                        'action'        => 'index'
                    ]
                ],
                'may_terminate' => true,
                'child_routes' => [
                    //Page Controller
                    'user-page' => [
                        'type' => "Segment",
                        'options' => [
                            'route' => ':slug[/]',
                            'constraints' => [
                                'slug' => '[a-zA-Z0-9_-]+'
                            ],
                            'defaults' => [
                                'controller' => 'BazaarSite\Controller\Page',
                                'action' => 'index'
                            ]
                            
                        ]
                    ],

                    //Category Controller
                    'category-page' => [
                        'type' => "Segment",
                        'options' => [
                            'route' => '[:category/[:subcategory]]',
                            'constraints' => [
                                'category' => '[a-zA-Z_-]+',
                                'subcategory' => '[a-zA-Z_-]+',
                            ],
                            'defaults' => [
                                'controller' => 'BazaarSite\Controller\Category',
                                'action' => 'index'
                            ]                            
                        ]
                    ],
                ]
            ],
            
            // BazaarSite Pages
            'about' => [
                'type'  => "Literal",
                'options' => [
                    'route' => '/about',
                    'defaults' => [
                        'controller'    => 'BazaarSite\Controller\Index',
                        'action'  => 'about',
                    ]
                ]
            ],
            'help' => [
                'type'  => "Literal",
                'options' => [
                    'route' => '/help',
                    'defaults' => [
                        'controller'    => 'BazaarSite\Controller\Index',
                        'action'  => 'help',
                    ]
                ]
            ],
            'terms' => [
                'type'  => "Literal",
                'options' => [
                    'route' => '/terms',
                    'defaults' => [
                        'controller'    => 'BazaarSite\Controller\Index',
                        'action'  => 'terms-and-condition',
                    ]
                ]
            ],
            'policy' => [
                'type'  => "Literal",
                'options' => [
                    'route' => '/policy',
                    'defaults' => [
                        'controller'    => 'BazaarSite\Controller\Index',
                        'action'  => 'policy',
                    ]
                ]
            ]
        ]
    ]
];