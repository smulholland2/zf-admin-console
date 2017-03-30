<?php
    namespace StudentManager\Entity\StudentInfo;

    use Doctrine\ORM\Mapping as ORM;
    use Doctrine\Common\Collections\ArrayCollection;

    /**
    * This class represents a single student from one course.
    * This is the base class that has all the mappings shared
    * by the courses required information. Other requirements 
    * and the table binding happens in the sub classes.
    */

    class BaseStudent 
    {
        /**
        *
        * So far, these are the fields included.
        * [UU],[UM],[UC],[NF],[NL],[UA],[DA],[ES]
        * [FIN],[DATE_EXPIRE],[VER],[FRANCHNO]
        *
        */

        /**
        * @ORM\Id
        * @ORM\GeneratedValue
        * @ORM\Column(name="ID")
        */
        protected $Id;

        /**
        * @ORM\Column(name="UU")
        */
        protected $Username;

        /** 
        * @ORM\Column(name="UC")  
        */
        protected $Password;

        /** 
        * @ORM\Column(name="UA")  
        */
        protected $AccountName;

        /** 
        * @ORM\Column(name="NF")  
        */
        protected $FirstName;

        /** 
        * @ORM\Column(name="NL")  
        */
        protected $LastName;

        /** 
        * @ORM\Column(name="ES")  
        */
        protected $Language;

        /** 
        * @ORM\Column(name="UM")  
        */
        protected $Email;

        /** 
        * @ORM\Column(name="DA")  
        */
        protected $AddedDate;

        /** 
        * @ORM\Column(name="DS")  
        */
        protected $StartDate;

        /** 
        * @ORM\Column(name="DE")  
        */
        protected $EndDate;

        /** 
        * @ORM\Column(name="FIN")  
        */
        protected $TrainingDone;

        /** 
        * @ORM\Column(name="DATE_EXPIRE")  
        */
        protected $ExpirationDate;

        /** 
        * @ORM\Column(name="VER")  
        */
        protected $Version;

        /** 
        * @ORM\Column(name="FRANCHNO")  
        */
        protected $StoreNumber;

        /**
        * Returns account id.
        * @return integer
        */
        public function getId() 
        {
            return $this->Id;
        }

        /**
        * Sets account id.
        * @param string $Id
        */
        public function setId($Id) 
        {
            $this->AccountName = $Id;
        }

        /**
        * Returns username text.
        * @return string
        */
        public function getUsername() 
        {
            return $this->UsernameName;
        }

        /**
        * Sets account name text.
        * @param string $UsernameName
        */
        public function setUsername($UsernameName) 
        {
            $this->UsernameName = $UsernameName;
        }

        /**
        * Returns user password.
        * @return string
        */
        public function getPassword() 
        {
            return $this->Password;
        }

        /**
        * Sets user password.
        * @param string $Password
        */
        public function setPassword($Password) 
        {
            $this->Password = $Password;
        }

        /**
        * Returns account name text.
        * @return string
        */
        public function getAccountName() 
        {
            return $this->AccountName;
        }

        /**
        * Sets account name text.
        * @param string $AccountName
        */
        public function setAccountName($AccountName) 
        {
            $this->AccountName = $AccountName;
        }

        /**
        * Returns user FirstName.
        * @return string
        */
        public function getFirstName() 
        {
            return $this->FirstName;
        }

        /**
        * Sets user FirstName.
        * @param string $FirstName
        */
        public function setFirstName($FirstName) 
        {
            $this->FirstName = $FirstName;
        }

        /**
        * Returns user LastName.
        * @return string
        */
        public function getLastName() 
        {
            return $this->LastName;
        }

        /**
        * Sets user LastName.
        * @param string $LastName
        */
        public function setLastName($LastName) 
        {
            $this->LastName = $LastName;
        }

        /**
        * Returns user Language.
        * @return string
        */
        public function getLanguage() 
        {
            return $this->Language;
        }

        /**
        * Sets user Language.
        * @param string $Language
        */
        public function setLanguage($Language) 
        {
            $this->Language = $Language;
        }

        /**
        * Returns user Email.
        * @return string
        */
        public function getEmail() 
        {
            return $this->Email;
        }

        /**
        * Sets user Email.
        * @param string $Email
        */
        public function setEmail($Email) 
        {
            $this->Email = $Email;
        }

        /**
        * Returns user AddedDate.
        * @return string
        */
        public function getAddedDate() 
        {
            return $this->AddedDate;
        }

        /**
        * Sets user AddedDate.
        * @param string $AddedDate
        */
        public function setAddedDate($AddedDate) 
        {
            $this->AddedDate = $AddedDate;
        }

        /**
        * Returns user StartDate.
        * @return string
        */
        public function getStartDate() 
        {
            return $this->StartDate;
        }

        /**
        * Sets user StartDate.
        * @param string $StartDate
        */
        public function setStartDate($StartDate) 
        {
            $this->StartDate = $StartDate;
        }

        /**
        * Returns user EndDate.
        * @return string
        */
        public function getEndDate() 
        {
            return $this->EndDate;
        }

        /**
        * Sets user EndDate.
        * @param string $EndDate
        */
        public function setEndDate($EndDate) 
        {
            $this->EndDate = $EndDate;
        }

        /**
        * Returns user TrainingDone.
        * @return string
        */
        public function getTrainingDone() 
        {
            return $this->TrainingDone;
        }

        /**
        * Sets user TrainingDone.
        * @param string $TrainingDone
        */
        public function setTrainingDone($TrainingDone) 
        {
            $this->TrainingDone = $TrainingDone;
        }

        /**
        * Returns user ExpirationDate.
        * @return string
        */
        public function getExpirationDate() 
        {
            return $this->ExpirationDate;
        }

        /**
        * Sets user ExpirationDate.
        * @param string $ExpirationDate
        */
        public function setExpirationDate($ExpirationDate) 
        {
            $this->ExpirationDate = $ExpirationDate;
        }

        /**
        * Returns user Version.
        * @return string
        */
        public function getVersion() 
        {
            return $this->Version;
        }

        /**
        * Sets user Version.
        * @param string $Version
        */
        public function setVersion($Version) 
        {
            $this->Version = $Version;
        }

        /**
        * Returns user store number.
        * @return string
        */
        public function getStoreNumber() 
        {
            return $this->StoreNumber;
        }

        /**
        * Sets user store number.
        * @param string $StoreNumber
        */
        public function setStoreNumber($StoreNumber)
        {
            $this->StoreNumber = $StoreNumber;
        }

    }