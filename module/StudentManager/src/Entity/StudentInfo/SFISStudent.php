<?php
    namespace StudentManager\Entity\StudentInfo;

    use Doctrine\ORM\Mapping as ORM;
    use Doctrine\Common\Collections\ArrayCollection;

    /**
    * This class represents a single course and the amount of licenses available to a single account.
    * @ORM\Entity
    * @ORM\Table(name="[05D]")
    */
    class StudentInfo 
    {
        /**
        * So far, these are the fields included.
        *[id],[UU],[UC],[UA]
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
        protected $UserAdmin;

        /** 
        * @ORM\Column(name="NF")  
        */
        protected $FirstName;

        /** 
        * @ORM\Column(name="NL")  
        */
        protected $LastName;

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
        * Returns account name text.
        * @return string
        */
        public function getUsername() 
        {
            return $this->UsernameName;
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
        * Returns account contact name text.
        * @return string
        */
        public function getContactName() 
        {
            return $this->ContactName;
        }

        /**
        * Sets account contact name text.
        * @param string $ContactName
        */
        public function setContactName($ContactName) 
        {
            $this->ContactName = $ContactName;
        }

        /**
        * Returns account company name text.
        * @return string
        */
        public function getCompanyName() 
        {
            return $this->CompanyName;
        }

        /**
        * Sets account company name text.
        * @param string $CompanyName
        */
        public function setCompanyName($CompanyName) 
        {
            $this->CompanyName = $CompanyName;
        }

    }