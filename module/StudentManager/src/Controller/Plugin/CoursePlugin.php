<?php
namespace StudentManager\Controller\Plugin; 

use Zend\Mvc\Controller\Plugin\AbstractPlugin;
use StudentManager\Entity\StudentInfo\AAStudent;
use StudentManager\Entity\StudentInfo\ADStudent;
use StudentManager\Entity\StudentInfo\ASStudent;
use StudentManager\Entity\StudentInfo\ALCStudent;
use StudentManager\Entity\StudentInfo\CBCFStudent;
use StudentManager\Entity\StudentInfo\EMWSStudent;
use StudentManager\Entity\StudentInfo\FSHStudent;
use StudentManager\Entity\StudentInfo\FSMStudent;
use StudentManager\Entity\StudentInfo\HACCPStudent;
use StudentManager\Entity\StudentInfo\RecertStudent;
use StudentManager\Entity\StudentInfo\SFISStudent;

//use StudentManager\Form\StudentInfo\AAFrorm;
//use StudentManager\Form\StudentInfo\ADForm;
//use StudentManager\Form\StudentInfo\ASForm;
//use StudentManager\Form\StudentInfo\ALCForm;
//use StudentManager\Form\StudentInfo\CBCFForm;
//use StudentManager\Form\StudentInfo\EMWSForm;
use StudentManager\Form\StudentInfo\FSHForm;
use StudentManager\Form\StudentInfo\FSHAlaskaForm;
//use StudentManager\Form\StudentInfo\FSMForm;
//use StudentManager\Form\StudentInfo\HACCPForm;
//use StudentManager\Form\StudentInfo\RecertForm;
//use StudentManager\Form\StudentInfo\SFISForm;

// Plugin class
class CoursePlugin extends AbstractPlugin 
{
    private const AAIDS     = array(166);
    private const ADIDS     = array(167);
    private const ASIDS     = array(168);
    private const ALCIDS    = array(178);
    private const CBCFIDS   = array(170,4);
    private const EMWSIDS   = array(1);
    private const FSHIDS    = array(3,19,76,77,83,110,113,115,123,16,18,24,74,75,79,114,157,162,163,164,172,21,80);
    private const FSMIDS    = array(2,169,179,182);
    private const HACCPIDS  = array(6);
    private const RECERTIDS = array(14,165,171,180,181);
    private const SFISIDS   = array(5);
    private const ALASKAIDS = array(185);


    // We use this function to read the product id and return the entity associated 
    // with the course.
    public function findCourse($productId)
    {
        if(in_array($productId, self::AAIDS))
            return AAStudent::class;
        else if(in_array($productId, self::ADIDS))
            return ADStudent::class;
        else if(in_array($productId, self::ASIDS))
            return ASStudent::class;
        else if(in_array($productId, self::ALCIDS))
            return ALCStudent::class;
        else if(in_array($productId, self::CBCFIDS))
            return CBCFStudent::class;
        else if(in_array($productId, self::EMWSIDS))
            return EMWSStudent::class;
        else if(in_array($productId, self::FSHIDS))
            return FSHStudent::class;
        else if(in_array($productId, self::FSMIDS))
            return FSMStudent::class;
        else if(in_array($productId, self::HACCPIDS))
            return HACCPStudent::class;
        else if(in_array($productId, self::RECERTIDS))
            return RecertStudent::class;
        else if(in_array($productId, self::SFISIDS))
            return SFIFStudent::class;
        else if(in_array($productId, self::ALASKAIDS))
            return FSHStudent::class;
    }

    public function findProduct($productId)
    {

    }

    public function findForm($productId)
    {
        if(in_array($productId, self::AAIDS))
            return new AAForm();
        else if(in_array($productId, self::ADIDS))
            return new ADForm();
        else if(in_array($productId, self::ASIDS))
            return new ASForm();
        else if(in_array($productId, self::ALCIDS))
            return new ALCForm();
        else if(in_array($productId, self::CBCFIDS))
            return new CBCFForm();
        else if(in_array($productId, self::EMWSIDS))
            return new EMWSForm();
        else if(in_array($productId, self::FSHIDS))
            return new FSHForm();
        else if(in_array($productId, self::FSMIDS))
            return new FSMForm();
        else if(in_array($productId, self::HACCPIDS))
            return new HACCPForm();
        else if(in_array($productId, self::RECERTIDS))
            return new RecertForm();
        else if(in_array($productId, self::SFISIDS))
            return new SFIFForm();
        else if(in_array($productId, self::SFISIDS))
            return new SFIFForm();
        else if(in_array($productId, self::ALASKAIDS))
            return new FSHAlaskaForm();
    }
}