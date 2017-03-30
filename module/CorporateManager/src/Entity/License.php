<?php
    namespace CorporateManager\Entity;

    use Doctrine\ORM\Mapping as ORM;
    use Doctrine\Common\Collections\ArrayCollection;

    /**
    * This class represents a single course and the amount of licenses available to a single account.
    * @ORM\Entity
    * @ORM\Table(name="Licenses")
    */
    class License 
    {
        // Post status constants.
        const UNLIMITED          = -1; // Unlimited Licesnes.
        const INACTIVE           = -2; // Course disabled from purchasing.
        const VOUCHER            = -3; // Voucher and License Key accounts.

        /**
        * @ORM\Id
        * @ORM\Column(name="LicenseId")
        * @ORM\GeneratedValue
        */
        protected $LicenseId;

        /** 
        * @ORM\Column(name="UserId")  
        */
        protected $UserId;

        /** 
        * @ORM\Column(name="ProductId")  
        */
        protected $ProductId;

        /** 
        * @ORM\Column(name="LicensesRemaining")  
        */
        protected $LicensesRemaining;    
        
        /**
        * Returns ID of this license set.
        * @return integer
        */
        public function getLicenseId() 
        {
            return $this->LicenseId;
        }

        /**
        * Sets ID of this comment.
        * @param int $id
        */
        public function setLicenseId($LicenseId) 
        {
            $this->LicenseId = $LicenseId;
        }
        
        /**
        * Returns user id text.
        * @return string
        */
        public function getUserId() 
        {
            return $this->UserId;
        }

        /**
        * Sets user InitProviderInterface text.
        * @param string $UserId
        */
        public function setUserId($UserId) 
        {
            $this->UserId = $UserId;
        }
        
        /**
        * Returns product id.
        * @return int
        */
        public function getProductId() 
        {
            return $this->ProductId;
        }

        /**
        * Sets the product id.
        * @param int $ProductId
        */
        public function setProductId($ProductId) 
        {
            $this->ProductId = $ProductId;
        }

        /**
        * Returns the number of licenses remaining or a special account type.
        * @return string
        */
        public function getLicensesRemaining() 
        {
            return $this->LicensesRemaining;
        }
        
        /**
        * Sets the date when this post was created.
        * @param int $LicensesRemaining
        */
        public function setLicensesRemaining($LicensesRemaining) 
        {
            $this->LicensesRemaining = $LicensesRemaining;
        }
    }