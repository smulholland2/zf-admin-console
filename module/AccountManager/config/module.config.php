<?php
namespace AccountManager;

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;

return [
    'router' => [
        'routes' => [
            'account-manager' => [
                'type' => Segment::class,
                'options' => [
                    'route'    => '/account-manager[/:action]',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'edit-licenses' => [
                'type' => Segment::class,
                'options' => [
                    'route'    => '/account-manager/edit-licenses[/:action]',
                    'defaults' => [
                        'controller' => Controller\EditLicensesController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\IndexController::class => InvokableFactory::class,
            Controller\EditLicensesController::class => Controller\Factory\EditLicensesControllerFactory::class,
        ],
    ],
    'controller_plugins' => [
        'factories' => [
            Controller\Plugin\LicensesPlugin::class => InvokableFactory::class,
        ],
        'aliases' => [
            'modifier' => Controller\Plugin\LicensesPlugin::class,
        ],
    ],
    'view_manager' => [        
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
    'doctrine' => [
        'driver' => [
            __NAMESPACE__ . '_driver' => [
                'class' => AnnotationDriver::class,
                'cache' => 'array',
                'paths' => [__DIR__ . '/../src/Entity']
            ],
            'orm_default' => [
                'drivers' => [
                    __NAMESPACE__ . '\Entity' => __NAMESPACE__ . '_driver'
                ]
            ]
        ]
    ]  
];

