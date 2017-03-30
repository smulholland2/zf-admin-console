<?php
    namespace StudentManager\Entity\StudentInfo;

    use Doctrine\ORM\Mapping as ORM;
    use Doctrine\Common\Collections\ArrayCollection;

    /**
    * This class represents a single course and the amount of licenses available to a single account.
    * @ORM\Entity
    * @ORM\Table(name="[01D]")
    */
    class FSHStudent 
    {
        const LANG_ENGLISH    = 'ENGLISH';
        const LANG_SPANISH    = 'SPANISH';
        const LANG_MANDARIN   = 'MANDARI';
        const LANG_VIETNAMESE = 'VIETNAM';
        const LANG_TAGALOG    = 'TAGALOG';
        const LANG_KOREAN     = 'KOREAN';
        const VER_HTML5       = 'FS9';
        const VER_FLASH       = 'FS6H';
        const FINISHED        = '1';
        const UNFINISHED      = '0';

        /**
        *
        * So far, these are the fields included.
        * [id],[UU],[UC],[UA],[NF],[NL],[ES],[UM],[DA],[DS],[DE],[FIN]
        * [DATE_EXPIRE],[VER],[QBANK],[REGION],[GENDER],[FRANCHNO]
        *
        */

        /**
        * @ORM\id
        * @ORM\GeneratedValue
        * @ORM\Column(name="id")
        */
        protected $id;

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
        * @ORM\Column(name="QBANK")  
        */
        protected $QuestionGroup;

        /** 
        * @ORM\Column(name="REGION")  
        */
        protected $Jurisdiction;

        /** 
        * @ORM\Column(name="GENDER")  
        */
        protected $Gender;

        /** 
        * @ORM\Column(name="FRANCHNO")  
        */
        protected $StoreNumber;

        /** 
        * @ORM\Column(name="ME")  
        */
        protected $Type;

        /**
        * Returns account id.
        * @return integer
        */
        public function getId() 
        {
            return $this->id;
        }

        /**
        * Sets account id.
        * @param string $Id
        */
        public function setId($id) 
        {
            $this->AccountName = $id;
        }

        /**
        * Returns username text.
        * @return string
        */
        public function getUsername() 
        {
            return $this->Username;
        }

        /**
        * Sets account name text.
        * @param string $Username
        */
        public function setUsername($Username) 
        {
            $this->Username = $Username;
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
        * Returns user QuestionGroup.
        * @return string
        */
        public function getQuestionGroup() 
        {
            return $this->QuestionGroup;
        }

        /**
        * Sets user QuestionGroup.
        * @param string $QuestionGroup
        */
        public function setQuestionGroup($QuestionGroup) 
        {
            $this->QuestionGroup = $QuestionGroup;
        }

        /**
        * Returns user QuestionGroup.
        * @return string
        */
        public function getJurisdiction() 
        {
            return $this->Jurisdiction;
        }

        /**
        * Sets user Jurisdiction.
        * @param string $Jurisdiction
        */
        public function setJurisdiction($Jurisdiction) 
        {
            $this->Jurisdiction = $Jurisdiction;
        }

        /**
        * Returns user gender.
        * @return string
        */
        public function getGender() 
        {
            return $this->Gender;
        }

        /**
        * Sets user gender.
        * @param string $Gender
        */
        public function setGender($Gender) 
        {
            $this->Gender = $Gender;
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

        /**
        * Returns the job type code.
        * @return string
        */
        public function getType() 
        {
            return $this->Type;
        }

        /**
        * Sets the type.
        * @param string $Type
        */
        public function setType($Type)
        {
            $this->Type = $Type;
        }
    }