<?php
namespace CorporateManager\Repository;

use Doctrine\ORM\EntityRepository;
use CorporateManager\Entity\License;

/**
 * This is the custom repository class for Post entity.
 */
class LicenseRepository extends EntityRepository
{
    /**
     * Retrieves all the account in the account table.
     * @return array
     */

    const ACCOUNT_TABLE  = '07L3';
    const ACCOUNT_FIELDS = 'UU,NF,NL,NCPY';

    public function getAllAccounts()
    {
        $entityManager = $this->getEntityManager();
        
        $queryBuilder = $entityManager->createQueryBuilder();
        
        $queryBuilder->select(self::ACCOUNT_FIELDS)
            ->from(self::ACCOUNT_TABLE, 'a')
            ->orderBy('a.U', 'DESC');
        
        $accounts = $queryBuilder->getQuery()->getResult();

        return $accounts;
    }
}