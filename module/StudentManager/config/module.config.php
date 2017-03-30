<?php
namespace StudentManager;

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;

return [
    'router' => [
        'routes' => [
            'student-manager' => [
                'type' => Segment::class,
                'options' => [
                    'route'    => '/student-manager[/:action]',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'edit-student' => [
                'type' => Segment::class,
                'options' => [
                    'route'    => '/student-manager/edit-student[/:action]',
                    'defaults' => [
                        'controller' => Controller\EditStudentController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\IndexController::class => InvokableFactory::class,
            Controller\EditStudentController::class => Controller\Factory\EditStudentControllerFactory::class,
        ],
    ],
    'controller_plugins' => [
        'factories' => [
            Controller\Plugin\CoursePlugin::class => InvokableFactory::class,
        ],
        'aliases' => [
            'courses' => Controller\Plugin\CoursePlugin::class,
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

