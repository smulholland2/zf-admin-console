<?php
    namespace StudentManager\Entity;

    use Doctrine\ORM\Mapping as ORM;
    use Doctrine\Common\Collections\ArrayCollection;

    /**
    * This class represents a single course
    * @ORM\Entity
    * @ORM\Table(name="[07DS2]")
    */
    class Course 
    {
        /**
        * @ORM\id
        * @ORM\GeneratedValue
        * @ORM\Column(name="id")
        */
        protected $id;

        /**
        * @ORM\Column(name="JobType")
        */
        protected $JobType;

        /**
        * @ORM\Column(name="StuType")
        */
        protected $StuType;

        /**
        * @ORM\Column(name="ProductName")
        */
        protected $Name;

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
        * @param integer $Id
        */
        public function setId($Id) 
        {
            $this->Id = $Id;
        }

        /**
        * Returns job type (for FSH/FSM [01D] table).
        * @return integer
        */
        public function getJobType() 
        {
            return $this->JobType;
        }

        /**
        * Sets account id.
        * @param integer $JobType
        */
        public function setJobType($JobType) 
        {
            $this->JobType = $JobType;
        }

        /**
        * Returns student type (for recert [02D] table).
        * @return integer
        */
        public function getStuType() 
        {
            return $this->StuType;
        }

        /**
        * Sets account id.
        * @param integer $StuType
        */
        public function setStuType($StuType) 
        {
            $this->StuType = $StuType;
        }

        /**
        * Returns the name of the course.
        * @return string
        */
        public function getName() 
        {
            return $this->Name;
        }

        /**
        * Sets course name.
        * @param string $Name
        */
        public function setName($Name) 
        {
            $this->Name = $Name;
        }
    }