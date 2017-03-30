<?php
namespace ProductManager;

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;

return [
    'router' => [
        'routes' => [
            'products' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/products/index[/:action]',
                    'defaults' => [
                        'controller'    => Controller\ProductController::class,
                        'action'        => 'index',
                    ],
                ],
            ],
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'ProductManager' => __DIR__ . '/../view',
        ],
    ],
];
