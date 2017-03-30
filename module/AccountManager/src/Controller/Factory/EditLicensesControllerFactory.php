<?php
namespace AccountManager\Controller\Factory;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use AccountManager\Controller\EditLicensesController;

/**
 * This is the factory for EditLicensesController. Its purpose is to instantiate the
 * controller.
 */
class EditLicensesControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, 
                     $requestedName, array $options = null)
    {
        $entityManager = $container->get('doctrine.entitymanager.orm_default');
        
        // Instantiate the controller and inject dependencies
        return new EditLicensesController($entityManager);
    }
}