<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonModule for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace StudentManager\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Http\Request;
use StudentManager\Entity\Course;
use StudentManager\Controller\Plugin\CoursePlugin;
use StudentManager\Form\StudentInfo\FSHForm;
//use StudentManager\Form\StudentInfo\FSHAlaskaForm;
//use StudentManager\Form\StudentInfo\ALCForm;

class EditStudentController extends AbstractActionController
{

    /**
    * Entity manager.
    * @var Doctrine\ORM\EntityManager
    */
    private $entityManager;

    private $course;

    private $product;

    private $form;
    
    // Inject dependencies to the controller.
    public function __construct($entityManager) 
    {
        $this -> entityManager = $entityManager;
    }

    public function indexAction()
    {
        if($this -> getRequest() -> isPost())
        {
            // Get student and product ids from post.
            $data = $this -> params() -> fromPost();

            //$this -> course = $this -> courses() -> findCourse($data['course']);

            //$this -> product = $this -> courses() -> findProduct($data['course']);

            //$this -> form = $this -> courses() -> findForm($data['course']);

            return new ViewModel();
        }
        else
        {
            /*echo json_encode("no accounts");
            exit;*/
            return new ViewModel();
        }
    }

    public function editAction()
    {
        if($this -> getRequest() -> isPost())
        {
            // Create form.
            $form = $this -> form;

            // Get student and product ids from post.
            $data = $this -> params() -> fromPost();        

            $this -> form = $this -> courses() -> findForm($data['course-id']);

            $this -> course = $this -> courses() -> findCourse($data['course-id']);
            
            // Validate input parameter
            if($data['student-id'] < 0)
            {
                $this -> getResponse() -> setStatusCode(404);
                return;
            }

            // Find the existing student in the database.
            $student = $this -> entityManager -> getRepository($this -> course)
                    -> findOneById($data['student-id']);

            if ($student == null)
            {
                $this -> getResponse() -> setStatusCode(404);
                return;
            }

            $data = [
                'username'        => $student->getUsername(),
                'password'        => $student->getPassword(),
                'account-name'    => $student->getAccountName(),
                'first-name'      => $student->getFirstName(),
                'last-name'       => $student->getLastName(),
                'language'        => $student->getLanguage(),
                'email'           => $student->getEmail(),
                'added-date'      => $student->getAddedDate(),
                'start-date'      => $student->getStartDate(),
                'end-date'        => $student->getEndDate(),
                'version'         => $student->getVersion(),
                'training-done'   => $student->getTrainingDone(),
                'expiration-date' => $student->getExpirationDate(),
                'question-group'  => $student->getQuestionGroup(),
                'jurisdiction'    => $student->getJurisdiction(),
                'gender'          => $student->getGender(),
                'store-number'    => $student->getStoreNumber(),
                
            ];
            
            $this -> form ->setData($data);

            // Render the view template.
            return new ViewModel([
                'form'    => $this -> form,
                'student' => $student
            ]);
        }
        else
        {
            // Redirect the user to "select student" page.
            return $this->redirect()->toRoute('edit-student', ['action'=>'index']);
        }
    }

    public function listAction()
    {
        if ($this -> getRequest() -> isXmlHttpRequest())
        {
            if($this -> getRequest() -> isPost())
            {
                $accounts = [];

                $data = $this -> params() -> fromPost();

                $this -> course = $this -> courses() -> findCourse($data['course']);

                $this -> product = $this -> entityManager -> getRepository(Course::class)
                -> findOneByid($data['course']);

                $type = $this -> product -> getJobType();

                if(!isset($type))
                    $type = $this -> product -> getStuType();
                
                $queryBuilder = $this -> entityManager->createQueryBuilder();                   

                if(isset($type))
                {
                    $queryBuilder -> select("c")
                    -> from($this -> course, "c")
                    -> where("c.Username LIKE ?1")
                    -> orwhere("c.Username LIKE ?2")                    
                    -> orwhere("c.AccountName LIKE ?1")
                    -> orwhere("c.AccountName LIKE ?2")
                    -> orwhere("c.FirstName LIKE ?1")
                    -> orwhere("c.FirstName LIKE ?2")
                    -> orwhere("c.LastName LIKE ?1")
                    -> orwhere("c.LastName LIKE ?2")
                    -> orwhere("c.Email LIKE ?1")
                    -> orwhere("c.Email LIKE ?2")
                    -> andwhere("c.Type = ?3")
                    -> setParameter(1,$data['filter']."%")
                    -> setParameter(2,"%".$data['filter'])
                    -> setParameter(3, $type)
                    -> orderBy("c.Username", "ASC");
                }
                else
                {
                    $queryBuilder -> select("c")
                    -> from($this -> course, "c")
                    -> where("c.Username LIKE ?1")
                    -> orwhere("c.Username LIKE ?2")
                    -> orwhere("c.AccountName LIKE ?1")
                    -> orwhere("c.AccountName LIKE ?2")
                    -> orwhere("c.FirstName LIKE ?1")
                    -> orwhere("c.FirstName LIKE ?2")
                    -> orwhere("c.LastName LIKE ?1")
                    -> orwhere("c.LastName LIKE ?2")
                    -> orwhere("c.Email LIKE ?1")
                    -> orwhere("c.Email LIKE ?2")
                    -> setParameter(1,$data['filter']."%")
                    -> setParameter(2,"%".$data['filter'])
                    -> orderBy("c.Username", "ASC");
                }
                

                $results = $queryBuilder->getQuery()->getResult();
                
                foreach ($results as $index => $result) 
                {
                    $account = array(
                        'UserId'      => $result -> getId(),
                        'Username'    => $result -> getUsername(),
                        'AccountName' => $result -> getAccountName(),
                        'FirstName'   => $result -> getFirstName(), 
                        'LastName'    => $result -> getLastName(),
                        'Email'       => $result -> getEmail()
                    );

                    array_push($accounts, $account);
                }

                echo json_encode($accounts);
                exit;
            }
            else
            {
                echo json_encode("no students");
                exit;
            }
        }
    }

    public function updateStudentAction()
    {        
        if($this -> getRequest() -> isXmlHttpRequest())
        {
            $data = $this -> params() -> fromPost();

            $student = $this -> courses() -> findCourse($data['course']);;
        
            $student -> setUsername($data['username']);
            $student -> setPassword($data['password']);
            $student -> setAccountName($data['account-name']);
            $student -> setFirstName($data['first-name']);
            $student -> setLastName($data['last-name']);
            $student -> setLanguage($data['language']);
            $student -> setEmail($data['email']);
            $student -> setAddedDate($data['added-date']);
            $student -> setStartDate($data['start-date']);
            $student -> setEndDate($data['end-date']);
            $student -> setVersion($data['version']);
            $student -> setTrainingDone($data['training-done']);
            $student -> setExpirationDate($data['expiration-date']);
            $student -> setQuestionGroup($data['question-group']);
            $student -> setJurisdiction($data['jurisdiction']);
            $student -> setGender($data['gender']);
            $student -> setStoreNumber($data['store-number']);

            // Add the entity to entity manager.
            $entityManager->persist($license);
            
            // Apply changes to database.
            $entityManager->flush();

            echo json_encode("success");
        }
        else
        {
            return $this->redirect()->toRoute('edit-student', ['action'=>'index']);
        }
    }
}
