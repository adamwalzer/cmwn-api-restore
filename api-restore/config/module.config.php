<?php

return [
    'service_manager' => [
        'aliases' => [
            \Restore\Service\RestoreDbServiceInterface::class => \Restore\Service\RestoreDbService::class,
        ],
        'invokables' => [
            \Restore\Delegator\RestoreDbDelegatorFactory::class =>
                \Restore\Delegator\RestoreDbDelegatorFactory::class,
        ],
        'factories' => [
            \Restore\Service\RestoreDbService::class => \Restore\Service\RestoreDbServiceFactory::class,
        ],
        'delegators' => [
            \Restore\Service\RestoreDbService::class => [\Restore\Delegator\RestoreDbDelegatorFactory::class],
        ],
    ],
    'controllers' => [
        'factories' => [
            \Restore\Controller\RestoreDbController::class => \Restore\Controller\RestoreDbControllerFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'restore.rest' => [
                'type' => 'literal',
                'options' => [
                    'route' => '/restore',
                    'defaults' => [
                        'controller' => 'Restore\Controller\RestoreDb',
                        'action'     => 'restore',
                    ],
                ],
            ],
        ],
    ],
];
