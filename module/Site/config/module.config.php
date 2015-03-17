<?php

return [
    'translator'    => [
        'local' => 'en_US',
        'translator_file_patterns' => [
            // accepts multiple configuration
            [
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ]
        ]
    ],
    // Default configuration
    'view_manager'  => [
        'display_not_found_reason'  => true,
        'display_exceptions'        => true,
        'doctype'                   => 'HTML5',
        'not_found_template'        => 'error/404',
        'exception_template'        => 'error/index',
        'template_map'              => [
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
            'site/layout'           => __DIR__ . '/../view/layout/site.phtml',
            'site/partial/header'   => __DIR__ . '/../view/layout/partial/header.phtml',
            'site/partial/footer'   => __DIR__ . '/../view/layout/partial/footer.phtml',
            
//            'template/footer'           => __DIR__ . '/../view/layout/partial/footer.phtml',
//            'template/navigation/sidebar'           => __DIR__ . '/../view/layout/template/navigation/sidebar.phtml',
//            'template/navigation/header'           => __DIR__ . '/../view/layout/template/navigation/header.phtml',
//            'template/navigation/breadcrumbs'           => __DIR__ . '/../view/layout/template/navigation/breadcrumbs.phtml',
//            'partial/navigation/header'           => __DIR__ . '/../view/layout/partial/navigation/header.phtml',
//            'partial/navigation/sidebar'           => __DIR__ . '/../view/layout/partial/navigation/sidebar.phtml',
//            'partial/navigation/breadcrumbs'           => __DIR__ . '/../view/layout/partial/navigation/breadcrumbs.phtml',
        ],
        'template_path_stack'       => [
            'site'   => __DIR__ . '/../view'
        ],
    ],
    'module_layouts' => [
        'Site' => 'site/layout'
    ]
];