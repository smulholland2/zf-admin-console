<?php
    namespace CorporateManager\Entity;

    use Doctrine\ORM\Mapping as ORM;
    use Doctrine\Common\Collections\ArrayCollection;

    /**
    * This class represents a single course and the amount of licenses available to a single account.
    * @ORM\Entity
    * @ORM\Table(name="[07L2]")
    */
    class CorporateInfo 
    {
        /**
        * So far, these are the fields included.
        *[id],[UU],[NF],[NL],[UA]
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
        protected $CorporateName;

        /** 
        * @ORM\Column(name="NF")  
        */
        protected $FirstName;

        /** 
        * @ORM\Column(name="NL")  
        */
        protected $LastName;

        /** 
        * @ORM\Column(name="UA")  
        */
        protected $CompanyName;

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
        * Returns account first name text.
        * @return string
        */
        public function getFirstName() 
        {
            return $this->FirstName;
        }

        /**
        * Sets account first name text.
        * @param string $FirstName
        */
        public function setFirstName($FirstName) 
        {
            $this->FirstName = $FirstName;
        }
        /**
        * Returns account last name text.
        * @return string
        */
        public function getLastName() 
        {
            return $this->LastName;
        }

        /**
        * Sets account last name text.
        * @param string $LastName
        */
        public function setLastName($LastName) 
        {
            $this->FirstName = $LastName;
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