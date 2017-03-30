<?php

    namespace Accounting\Entity;

    use Doctrine\ORM\Mapping as ORM;
    use Doctrine\Common\Collections\ArrayCollection;

    /**
    * This class represents invoicing information for a single unlimited account.
    * @ORM\Entity
    * @ORM\Table(name="[Invoice]")
    */
    class InvoicedCustomer 
    {
        /**
        * @ORM\Id
        * @ORM\GeneratedValue
        * @ORM\Column(name="ID")
        */
        protected $Id;

        /** 
        * @ORM\Column(name="Corporate")  
        */
        protected $AccountType;

        /**
        * @ORM\Column(name="UserName")
        */
        protected $TPNumber;        

        /** 
        * @ORM\Column(name="CompanyName")  
        */
        protected $Rep;

        /** 
        * @ORM\Column(name="Method")  
        */
        protected $InvoiceMethod;

        /**
        * @ORM\OneToMany(targetEntity="\Accounting\Entity\Corporate", mappedBy="Post")
        * @ORM\JoinColumn(name="Id", referencedColumnName="Post")
        */
        protected $CorporateId;

        /**
        * @ORM\OneToMany(targetEntity="\Accounting\Entity\Account", mappedBy="Post")
        * @ORM\JoinColumn(name="Id", referencedColumnName="Post")
        */
        protected $AccountId;

        /**
        * @ORM\OneToMany(targetEntity="\Accounting\Entity\Instructor", mappedBy="Post")
        * @ORM\JoinColumn(name="Id", referencedColumnName="Post")
        */
        protected $InstructorId;

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
            $this->Id = $Id;
        }

        /**
        * Returns account name text.
        * @return string
        */
        public function getAccountType() 
        {
            return $this->AccountType;
        }

        /**
        * Sets account name text.
        * @param string $AccountName
        */
        public function setAccountType($AccountType) 
        {
            $this->AccountType = $AccountType;
        }

        /**
        * Returns account contact name text.
        * @return string
        */
        public function getTPNumber() 
        {
            return $this->TPNumber;
        }

        /**
        * Sets link account number (if it exists).
        * @param int $TPNumber
        */
        public function setTPNumber($TPNumber) 
        {
            $this->TPNumber = $TPNumber;
        }        

        /**
        * Returns account rep.
        * @return string
        */
        public function getRep() 
        {
            return $this->Rep;
        }

        /**
        * Sets account rep.
        * @param string $Rep
        */
        public function setRep($Rep) 
        {
            $this->Rep = $Rep;
        }

        /**
        * Returns invoice bill method.
        * @return string
        */
        public function getInvoiceMethod() 
        {
            return $this->InvoiceMethod;
        }

        /**
        * Sets account rep.
        * @param string $Rep
        */
        public function setInvoiceMethod($InvoiceMethod) 
        {
            $this->InvoiceMethod = $InvoiceMethod;
        }

        /**
        * Returns the account id
        * @return int
        */
        public function getAccountId() 
        {
            return $this->AccountId;
        }

        /**
        * Sets account id.
        * @param int $AccountId
        */
        public function setAccountId($AccountId) 
        {
            $this->AccountId = $AccountId;
        }

    }