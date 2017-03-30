<?php
namespace Accounting;

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;

return [
    'router' => [
        'routes' => [
            'accounting' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/accounting/index[/:action]',
                    'defaults' => [
                        'controller'    => Controller\AccountingController::class,
                        'action'        => 'index',
                    ],
                ],
            ],
            'invoiced-customers' => [
                'type'    => Segment::class,
                'options' => [                    
                    'route'    => '/accounting/invoiced-customers[/:action]',
                    'defaults' => [
                        'controller'    => Controller\InvoicedCustomersController::class,
                        'action'        => 'index',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\AccountingController::class => InvokableFactory::class,
            Controller\InvoicedCustomersController::class => InvokableFactory::class,
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'Accounting' => __DIR__ . '/../view',
        ],
    ],
];
