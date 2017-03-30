<?php
namespace AccountManager\Controller\Plugin; 

use Zend\Mvc\Controller\Plugin\AbstractPlugin;
use AccountManager\Entity\License;

// Plugin class
class LicensesPlugin extends AbstractPlugin 
{
    public function checkForExistingLicenses($data, $entityManager)
    {
        $exists = false;

        $queryBuilder = $entityManager -> createQueryBuilder();

        $queryBuilder -> select("l")
            -> from(License::class, "l")
            -> where("l.UserId = ?1")
            -> andwhere("l.ProductId = ?2")
            -> setParameter(1, $data['account'])
            -> setParameter(2, $data['course']);

        $results = $queryBuilder -> getQuery() -> getResult();

        if(!empty($results))
            $exists = true;
        else
            $exists = false;

        return $exists;
    }

    public function updateExistingLicenses($data, $entityManager)
    {
        $queryBuilder = $entityManager -> createQueryBuilder();

        $query = $queryBuilder -> update(License::class, "l")
            -> set("l.LicensesRemaining", "?1")
            -> where("l.UserId = ?2")
            -> andwhere("l.ProductId = ?3")
            -> setParameter(1, $data['licenses'])
            -> setParameter(2, $data['account'])
            -> setParameter(3, $data['course'])
            -> getQuery();

        // Apply changes.
        $query -> execute();

        return true;
    }

    public function addNewLicenses($data, $entityManager)
    {
        $license = new License();
        
        $license -> setUserId($data['account']);
        $license -> setProductId($data['course']);
        $license -> setLicensesRemaining($data['licenses']);

        // Add the entity to entity manager.
        $entityManager->persist($license);
        
        // Apply changes to database.
        $entityManager->flush();       
    }
}