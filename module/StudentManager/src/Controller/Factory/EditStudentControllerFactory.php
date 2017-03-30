<?php
namespace StudentManager\Controller\Factory;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use StudentManager\Controller\EditStudentController;

/**
 * This is the factory for EditLicensesController. Its purpose is to instantiate the
 * controller.
 */
class EditStudentControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, 
                     $requestedName, array $options = null)
    {
        $entityManager = $container->get('doctrine.entitymanager.orm_default');
        
        // Instantiate the controller and inject dependencies
        return new EditStudentController($entityManager);
    }
}