<?php
namespace CorporateManager\Controller\Plugin; 

use Zend\Mvc\Controller\Plugin\AbstractPlugin;
use CorporateManager\Entity\License;

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
            $exists = true;

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
        $queryBuilder = $entityManager -> createQueryBuilder();

        $queryBuilder->select("l")
            ->from(License::class, "l")
            ->where("l.UserId = ". "'" . $data['account'] . "'")
            ->andwhere("l.ProductId = ". $data['course']);

        $results = $queryBuilder -> getQuery() -> getResult();

        return $results;
    }
}