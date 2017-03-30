<?php

    namespace Accounting\Entity;

    use Doctrine\ORM\Mapping as ORM;
    use Doctrine\Common\Collections\ArrayCollection;

    /**
    * This class represents an enumeration for easily finding how an invoice should be constructed.
    * @ORM\Entity
    * @ORM\Table(name="[InvoiceMethods]")
    */
    class InvoiceMethod
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
        * Returns invoice method id.
        * @return integer
        */
        public function getId() 
        {
            return $this->Id;
        }

        /**
        * Sets invoice method id.
        * @param string $Id
        */
        public function setId($Id) 
        {
            $this->Id = $Id;
        }

        /**
        * Returns invoice method type name.
        * @return string
        */
        public function getName() 
        {
            return $this->Name;
        }

        /**
        * Sets invoice method name.
        * @param string $Name
        */
        public function setName($Name) 
        {
            $this->Name = $Name;
        }

        /**
        * Returns invoice method type.
        * @return int
        */
        public function getType() 
        {
            return $this->Type;
        }

        /**
        * Sets invoice method type.
        * @param int $Type
        */
        public function setType($Type) 
        {
            $this->Type = $Type;
        }        
    }