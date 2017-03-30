<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonModule for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace AccountManager\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Http\Request;
use AccountManager\Entity\License;
use AccountManager\Entity\AccountInfo;
use AccountManager\Controller\Plugin\LicensesPlugin;

class EditLicensesController extends AbstractActionController
{

    /**
    * Entity manager.
    * @var Doctrine\ORM\EntityManager
    */
    private $entityManager;
    
    // Inject dependencies to the controller.
    public function __construct($entityManager) 
    {
        $this->entityManager = $entityManager;
    }

    public function indexAction()
    {
        // Check if user has submitted the form
        if($this->getRequest()->isPost())
        {
            // Retrieve form data from POST variables
            $data = $this->params()->fromPost();     
            
            // ... Do something with the data ...
            echo var_dump($data);
        }
        else
        {
            return new ViewModel();
        }
            
        // Pass form variable to view
        /*return new ViewModel([
            'form' => $form
        ]);*/
    }

    public function listAction()
    {
        if ($this -> getRequest() -> isXmlHttpRequest())
        {
            if($this -> getRequest() -> isPost())
            {
                $accounts = [];

                $data = $this -> params() -> fromPost();
                
                $queryBuilder = $this -> entityManager->createQueryBuilder();

                $queryBuilder -> select("a")
                    -> from(AccountInfo::class, "a")
                    -> where("a.AccountName LIKE ?1")
                    -> orwhere("a.ContactName LIKE ?1")
                    -> orwhere("a.ContactName LIKE ?2")
                    -> orwhere("a.CompanyName LIKE ?1")
                    -> orwhere("a.CompanyName LIKE ?2")
                    -> setParameter(1,$data['filter']."%")
                    -> setParameter(2,"%".$data['filter'])
                    -> orderBy("a.AccountName", "ASC");

                $results = $queryBuilder->getQuery()->getResult();
                
                foreach ($results as $index => $result) 
                {
                    $account = array(
                        'AccountName' => $result -> getAccountName(), 
                        'CompanyName' => $result -> getCompanyName(), 
                        'ContactName' => $result -> getContactName()
                    );

                    array_push($accounts, $account);
                }

                echo json_encode($accounts);
                exit;
            }
            else
            {
                echo json_encode("no accounts");
                exit;
            }
        }
    }

    public function totalLicensesAction()
    {
        if ($this -> getRequest() -> isXmlHttpRequest())
        {
            if($this -> getRequest() -> isPost())
            {
                $licenses = 0;

                $data = $this -> params() -> fromPost();
                
                $queryBuilder = $this -> entityManager -> createQueryBuilder();

                $queryBuilder -> select("l")
                    -> from(License::class, "l")
                    -> where("l.UserId = ?1")
                    -> andwhere("l.ProductId = ?2")
                    -> setParameter(1, $data['account'])
                    -> setParameter(2, $data['course']);

                $results = $queryBuilder -> getQuery() -> getResult();
                
                foreach ($results as $index => $result) 
                {
                    $licenses = array(
                        'LicensesRemaining' => $result -> getLicensesRemaining()
                    );
                }

                // If there is no record of licenses for that user, mark the result as null.
                // Otherwise, return the total number of licenses.
                if(!empty($results))
                    echo json_encode($licenses);
                else
                    echo json_encode(null);

                exit;
            }
        }
    }

    public function updateLicensesAction()
    {
        if ($this -> getRequest() -> isXmlHttpRequest())
        {
            if($this -> getRequest() -> isPost())
            {
                $licenses = 0;

                $data = $this -> params() -> fromPost();                

                if($data['type'] == 0)
                    $licenses = $data['licenses'];
                else
                {
                    unset($data['licenses']);
                    $data['licenses'] = $data['type'];
                    $licenses = $data['type'];
                }
                
                // This will query the database to check if a record for the current course exists or not.$_COOKIE
                // If the record exists, we will update that record. If not, we create a new record.
                $licensesExist = $this -> modifier() -> checkForExistingLicenses($data, $this -> entityManager);

                if($licensesExist)
                    $this -> modifier() -> updateExistingLicenses($data, $this -> entityManager);
                else
                    $this -> modifier() -> addNewLicenses($data, $this -> entityManager);

                echo json_encode(1);
                exit;
            }
        }
    }
}
