<?php
    namespace CorporateManager\Entity;

    use Doctrine\ORM\Mapping as ORM;
    use Doctrine\Common\Collections\ArrayCollection;

    /**
    * This class represents a single course and the amount of licenses available to a single account.
    * @ORM\Table(name="[07L2]")
    */
    class Corporate 
    {
        /**
        *
        *[AN],[AC],[AH],[PRO],[CA],[A4],[AD],[SKIP],[SKIPH],[SKIPR],[SKIPC],[SKIPHA],[SKIPSF],[SKIPE],[TIMEOUT],[VC],[LINK],[TRAIN_PERIOD]
        *,[MULTSTU],[QUIZ],[QUIZDATA],[VIDEODATA],[LESSONTIME],[STU_EDIT_INFO],[F90],[AUTOEMAIL],[RECEMAIL],[NOTIFYADMIN],[LESPERWK],[MINSCORE]
        *,[CONTACTEM],[MINLIC],[REORDER],[FRANCHISESET],[TRACKER],[REGION],[GEN],[EXPNOTICE],[Notes],[CTRLEXAM],[FORCECOR],[BEHINDEM],[FlashEnabled]
        *
        */        

        /**
        * @ORM\Id
        * @ORM\Column(name="AN")
        * @ORM\GeneratedValue
        */
        protected $AccountName;

        /** 
        * @ORM\Column(name="AC")  
        */
        protected $AccountPassword;

        /** 
        * @ORM\Column(name="ProductId")  
        */
        protected $AccountHint;
        
    }