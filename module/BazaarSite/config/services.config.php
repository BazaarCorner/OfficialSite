<?php

return [
    'aliases' => [
        'translator' => 'MvcTranslator',
    ],
    'abstract_factories' => [
        'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
        'Zend\Log\LoggerAbstractServiceFactory',
    ],
    'factories' => [
        'navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory',
        'sidebar' => 'BazaarSite\Service\SidebarNavigationFactory'
    ],
    'invokables' => []   
];