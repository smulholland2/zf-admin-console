<?php
namespace AccountManager\Repository;

use Doctrine\ORM\EntityRepository;
use Application\Entity\Post;

/**
 * This is the custom repository class for Post entity.
 */
class PostRepository extends EntityRepository
{
    /**
     * Retrieves all the account in the account table.
     * @return array
     */

    const ACCOUNT_TABLE  = '07O6';
    const ACCOUNT_FIELDS = 'AN,NCON,NCPY';

    public function getAllAccounts()
    {
        $entityManager = $this->getEntityManager();
        
        $queryBuilder = $entityManager->createQueryBuilder();
        
        $queryBuilder->select(self::ACCOUNT_FIELDS)
            ->from(self::ACCOUNT_TABLE, 'a')
            ->orderBy('a.AN', 'DESC');
        
        $accounts = $queryBuilder->getQuery()->getResult();

        return $accounts;
    }
}