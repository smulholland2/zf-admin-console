<?php

    namespace Accounting\Entity;

    use Doctrine\ORM\Mapping as ORM;
    use Doctrine\Common\Collections\ArrayCollection;

    /**
    * This class represents an enumeration for easily finding the table / class that holds account information.
    * @ORM\Entity
    * @ORM\Table(name="[InvoicedCourse]")
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
        protected $InvoicedCustomerId;

        /**
        * @ORM\Column(name="Type")
        */
        protected $ProductId;

        /** 
        * @ORM\Column(name="RevenueShare")  
        */
        protected $RevShare;

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
        * Returns the invoiced product id.
        * @return string
        */
        public function getProductId() 
        {
            return $this->ProductId;
        }

        /**
        * Sets the invoice product id.
        * @param string $ProductId
        */
        public function setProductId($ProductId) 
        {
            $this->ProductId = $ProductId;
        }

        /**
        * Returns the invoiced customer id from the invoice table.
        * @return int
        */
        public function getInvoicedCustomerId() 
        {
            return $this->InvoicedCustomerId;
        }

        /**
        * Sets invoiced customers id from the invoice table.
        * @param int $InvoicedCustomerId
        */
        public function setInvoicedCustomerId($InvoicedCustomerId) 
        {
            $this->InvoicedCustomerId = $InvoicedCustomerId;
        }

        /**
        * Returns revenue share amount for the course.
        * @return float
        */
        public function getRevShare() 
        {
            return $this->RevShare;
        }

        /**
        * Sets revenue share amount for the course.
        * @param float $RevShare
        */
        public function setRevShare($RevShare) 
        {
            $this->RevShare = $RevShare;
        }
    }