<?php
    namespace AccountManager\Entity;

    use Doctrine\ORM\Mapping as ORM;
    use Doctrine\Common\Collections\ArrayCollection;

    /**
    * This class represents a single course and the amount of licenses available to a single account.
    * @ORM\Entity
    * @ORM\Table(name="[07O6]")
    */
    class AccountInfo 
    {
        /**
        * So far, these are the fields included.
        *[id],[AN],[NCON],[NCPY]
        *
        */

        /**
        * @ORM\Id
        * @ORM\GeneratedValue
        * @ORM\Column(name="ID")
        */
        protected $Id;

        /**
        * @ORM\Column(name="AN")
        */
        protected $AccountName;

        /** 
        * @ORM\Column(name="NCON")  
        */
        protected $ContactName;

        /** 
        * @ORM\Column(name="NCPY")  
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