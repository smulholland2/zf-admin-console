<?php

    namespace Accounting\Entity;

    use Doctrine\ORM\Mapping as ORM;
    use Doctrine\Common\Collections\ArrayCollection;

    /**
    * This class represents an enumeration for easily finding the table / class that holds account information.
    * @ORM\Entity
    * @ORM\Table(name="[AccountType]")
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
        * @ORM\Column(name="Name")  
        */
        protected $Name;

        /**
        * @ORM\Column(name="Type")
        */
        protected $Type;

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
        * Returns account type name.
        * @return string
        */
        public function getName() 
        {
            return $this->Name;
        }

        /**
        * Sets account type name.
        * @param string $Name
        */
        public function setName($Name) 
        {
            $this->Name = $Name;
        }

        /**
        * Returns account type.
        * @return int
        */
        public function getType() 
        {
            return $this->Type;
        }

        /**
        * Sets account type.
        * @param int $Type
        */
        public function setType($Type) 
        {
            $this->Type = $Type;
        }        
    }