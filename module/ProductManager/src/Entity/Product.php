<?php

    namespace Product\Entity;

    use Doctrine\ORM\Mapping as ORM;
    use Doctrine\Common\Collections\ArrayCollection;

    /**
    * This class represents an a product or course from the product table.
    * @ORM\Entity
    * @ORM\Table(name="[07DS2]")
    */
    class Product 
    {
        /**
        * @ORM\Id
        * @ORM\GeneratedValue
        * @ORM\Column(name="id")
        */
        protected $Id;

        /** 
        * @ORM\Column(name="ProId")  
        */
        protected $ProId;

        /**
        * @ORM\Column(name="Price")
        */
        protected $Price;

        /**
        * @ORM\Column(name="ProductName")
        */
        protected $ProductName;

        /**
        * @ORM\Column(name="LMS")
        */
        protected $Online;

        /**
        * @ORM\Column(name="TableCode")
        */
        protected $TableCode;

        /**
        * @ORM\Column(name="JobType")
        */
        protected $JobType;

        /**
        * @ORM\Column(name="StuType")
        */
        protected $StuType;

        /**
        * @ORM\Column(name="SoryByImportance")
        */
        protected $SoryByImportance;

        /**
        * @ORM\Column(name="ProductDescription")
        */
        protected $Description;

        /**
        * @ORM\Column(name="CourseLink")
        */
        protected $CourseLink;

        /**
        * @ORM\Column(name="FCourseLink")
        */
        protected $FlashCourseLink;

        /**
        * @ORM\Column(name="SCourseLink")
        */
        protected $SpanishCourseLink;

        /**
        * @ORM\Column(name="SpanishAvai")
        */
        protected $SpanishAvailable;

        /**
        * @ORM\Column(name="Locale")
        */
        protected $Locale;

        /**
        * @ORM\Column(name="Region")
        */
        protected $Region;

        /**
        * @ORM\Column(name="CertificateExpiration")
        */
        protected $CertificateExpiration;

        /**
        * @ORM\Column(name="CourseTime")
        */
        protected $CourseTime;

        /**
        * @ORM\Column(name="TotalLessons")
        */
        protected $TotalLessons;

        /**
        * @ORM\Column(name="ExamType")
        */
        protected $ExamType;        

        /**
        * @ORM\Column(name="MinScore")
        */
        protected $MinScore;

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
        * @param int $Id
        */
        public function setId($Id) 
        {
            $this->Id = $Id;
        }        

        /**
        * Returns the products proid code.
        * @return string
        */
        public function getProId() 
        {
            return $this->ProId;
        }

        /**
        * Sets the products proid code.
        * @param string $ProId
        */
        public function setProId($ProId) 
        {
            $this->ProId = $ProId;
        }

         /**
        * Returns the products base price.
        * @return float
        */
        public function getPrice() 
        {
            return $this->Price;
        }

        /**
        * Sets the products base price.
        * @param float $Price
        */
        public function setPrice($Price) 
        {
            $this->Price = $Price;
        }

         /**
        * Returns the product name.
        * @return string
        */
        public function getProductName() 
        {
            return $this->ProductName;
        }

        /**
        * Sets the product name.
        * @param string $ProductName
        */
        public function setProductName($ProductName) 
        {
            $this->ProductName = $ProductName;
        }

         /**
        * Returns the LMS value.
        * Used to determine if the product should be displayed in the store.
        * @return integer
        */
        public function getOnline() 
        {
            return $this->Online;
        }

        /**
        * Sets the LMS value.
        * @param integer $Online
        */
        public function setOnline($Online) 
        {
            $this->Online = $Online;
        }

         /**
        * Returns the table where the students are registered.
        * @return string
        */
        public function getTableCode() 
        {
            return $this->TableCode;
        }

        /**
        * Sets a table to register students.
        * @param string $TableCode
        */
        public function setTableCode($TableCode) 
        {
            $this->TableCode = $TableCode;
        }

         /**
        * Returns the job type.
        * Used to determine individual food handler and manager courses.
        * Relates to [01D].[ME]
        * @return integer
        */
        public function getJobType() 
        {
            return $this->JobType;
        }

        /**
        * Sets the job type.
        * @param integer $JobType
        */
        public function setJobType($JobType) 
        {
            $this->JobType = $JobType;
        }

         /**
        * Returns the student type.
        * Used to determine individual recert classes.
        * Relates to [02D].[IL]
        * @return integer
        */
        public function getStuType() 
        {
            return $this->StuType;
        }

        /**
        * Sets account the student type.
        * @param integer $StuType
        */
        public function setStuType($StuType) 
        {
            $this->StuType = $StuType;
        }

         /**
        * Returns the importance level used for sorting product lists.
        * @return string
        */
        public function getSortByImportance() 
        {
            return $this->SortByImportance;
        }

        /**
        * Sets the importance level.
        * @param string $SoryByImportance
        */
        public function setSortByImportance($SortByImportance) 
        {
            $this->SortByImportance = $SortByImportance;
        }

         /**
        * Returns the product description.
        * @return string
        */
        public function getDescription() 
        {
            return $this->Description;
        }

        /**
        * Sets the product description.
        * @param string $Description
        */
        public function setDescription($Description) 
        {
            $this->Description = $Description;
        }

        /**
        * Returns the HTML5 course link.
        * @return string
        */
        public function getCourseLink() 
        {
            return $this->CourseLink;
        }

        /**
        * Sets the HTML5 course link.
        * @param string $CourseLink
        */
        public function setCourseLink($CourseLink) 
        {
            $this->CourseLink = $CourseLink;
        }
        
         /**
        * Returns the Flash course link.
        * @return string
        */
        public function getFlashCourseLink() 
        {
            return $this->FlashCourseLink;
        }

        /**
        * Sets the Flash course link.
        * @param string $FlashCourseLink
        */
        public function setFlashCourseLink($FlashCourseLink) 
        {
            $this->FlashCourseLink = $FlashCourseLink;
        }

         /**
        * Returns the Spanish course link.
        * @return string
        */
        public function getSpanishCourseLink() 
        {
            return $this->SpanishCourseLink;
        }

        /**
        * Sets the Spanish course link.
        * @param string $SpanishCourseLink
        */
        public function setSpanishCourseLink($SpanishCourseLink) 
        {
            $this->SpanishCourseLink = $SpanishCourseLink;
        }

         /**
        * Returns the availability of the the course in spanish.
        * @return integer
        */
        public function getSpanishAvailable() 
        {
            return $this->SpanishAvailable;
        }

        /**
        * Sets whether or not a course can be in spanish.
        * @param integer $SpanishAvailable
        */
        public function setSpanishAvailable($SpanishAvailable) 
        {
            $this->SpanishAvailable = $SpanishAvailable;
        }

         /**
        * Returns course locale.
        * Used for accurately timestamping based on timezone.
        * @return string
        */
        public function getLocale() 
        {
            return $this->Locale;
        }

        /**
        * Sets course locale.
        * @param string $Locale
        */
        public function setLocale($Locale) 
        {
            $this->Locale = $Locale;
        }

         /**
        * Returns course region.
        * Used to further distinguish between food handlers that share a job type.
        * @return string
        */
        public function getRegion() 
        {
            return $this->Region;
        }

        /**
        * Sets course region.
        * @param string $Region
        */
        public function setRegion($Region) 
        {
            $this->Region = $Region;
        }

         /**
        * Returns the amount of time before a course certificate expires.
        * @return string
        */
        public function getCertificateExpiration() 
        {
            return $this->CertificateExpiration;
        }

        /**
        * Sets the amount of time before a course certificate expires.
        * @param string $CertificateExpiration
        */
        public function setCertificateExpiration($CertificateExpiration) 
        {
            $this->CertificateExpiration = $CertificateExpiration;
        }

         /**
        * Returns how long a course takes (on average)
        * @return string
        */
        public function getCourseTime() 
        {
            return $this->CourseTime;
        }

        /**
        * Sets how long a course takes.
        * @param string $CourseTime
        */
        public function setCourseTime($CourseTime) 
        {
            $this->CourseTime = $CourseTime;
        }

         /**
        * Returns the total number of lessons in the course.
        * @return integer
        */
        public function getTotalLessons() 
        {
            return $this->TotalLessons;
        }

        /**
        * Sets the total number of lessons in the course.
        * @param integer $TotalLessons
        */
        public function setTotalLessons($TotalLessons) 
        {
            $this->TotalLessons = $TotalLessons;
        }

        /**
        * Returns the type of exam.
        * @return integer
        */
        public function getExamType() 
        {
            return $this->ExamType;
        }

        /**
        * Sets the type of exam.
        * @param integer $ExamType
        */
        public function setExamType($ExamType) 
        {
            $this->ExamType = $ExamType;
        }

        /**
        * Returns the minimum score required to pass the exam.
        * @return integer
        */
        public function getMinScore() 
        {
            return $this->MinScore;
        }

        /**
        * Sets the minimum score required to pass the exam.
        * @param integer $MinScore
        */
        public function setMinScore($MinScore) 
        {
            $this->MinScore = $MinScore;
        }
    }