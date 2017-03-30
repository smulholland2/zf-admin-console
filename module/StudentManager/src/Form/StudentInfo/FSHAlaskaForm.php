<?php

namespace StudentManager\Form\StudentInfo;

use Zend\Form\Form;
use Zend\InputFilter\InputFilter;
use Blog\Entity\StudentInfo\FSHStudent;

/**
 * This form is used to collect post data.
 */
class FSHForm extends Form
{
    /**
     * Constructor.     
     */
    public function __construct()
    {
        // Define form name
        parent::__construct('fsh-form');
     
        // Set POST method for this form
        $this->setAttribute('method', 'post');
                
        $this->addElements();
        $this->addInputFilter();  
        
    }
    
    /**
     * This method adds elements to form (input fields and submit button).
     */
    protected function addElements() 
    {
                
        // Add "username" field
        $this->add([        
            'type'  => 'text',
            'name' => 'username',
            'attributes' => [
                'id' => 'username'
            ],
            'options' => [
                'label' => 'Username',
            ],
        ]);
        
        // Add "password" field
        $this->add([
            'type'  => 'text',
            'name' => 'password',
            'attributes' => [                
                'id' => 'password'
            ],
            'options' => [
                'label' => 'Password',
            ],
        ]);
        
        // Add "account name" field
        $this->add([
            'type'  => 'text',
            'name' => 'account-name',
            'attributes' => [                
                'id' => 'account-name'
            ],
            'options' => [
                'label' => 'Account Name',
            ],
        ]);

        // Add "first name" field
        $this->add([
            'type'  => 'text',
            'name' => 'first-name',
            'attributes' => [                
                'id' => 'first-name'
            ],
            'options' => [
                'label' => 'First Name',
            ],
        ]);

        // Add "last name" field
        $this->add([
            'type'  => 'text',
            'name' => 'last-name',
            'attributes' => [                
                'id' => 'last-name'
            ],
            'options' => [
                'label' => 'Last Name',
            ],
        ]);        
        
        // Add "language" field
        $this->add([
            'type'  => 'select',
            'name' => 'status',
            'attributes' => [                
                'id' => 'status'
            ],
            'options' => [
                'label' => 'Status',
                'value_options' => [
                    FSHStudent::LANG_ENGLISH    => 'English',
                    FSHStudent::LANG_SPANISH    => 'Spanish',
                    FSHStudent::LANG_MANDARI    => 'Mandarin',
                    FSHStudent::LANG_KOREAN     => 'Korean',
                    FSHStudent::LANG_VIETNAMESE => 'Vietnamese',
                    FSHStudent::LANG_TAGALOG    => 'Tagalog',
                ]
            ],
        ]);

        // Add "email" field
        $this->add([
            'type'  => 'text',
            'name' => 'email',
            'attributes' => [                
                'id' => 'email'
            ],
            'options' => [
                'label' => 'Email',
            ],
        ]);

        // Add "added date" field
        $this->add([
            'type'  => 'text',
            'name' => 'added-date',
            'attributes' => [                
                'id' => 'added-date'
            ],
            'options' => [
                'label' => 'Date Added',
            ],
        ]); 

        // Add "start date" field
        $this->add([
            'type'  => 'text',
            'name' => 'start-date',
            'attributes' => [                
                'id' => 'start-date'
            ],
            'options' => [
                'label' => 'Start Date',
            ],
        ]);

        // Add "end date" field
        $this->add([
            'type'  => 'text',
            'name' => 'end-date',
            'attributes' => [                
                'id' => 'end-date'
            ],
            'options' => [
                'label' => 'End Date',
            ],
        ]);

        // Add "version" field
        $this->add([
            'type'  => 'text',
            'name' => 'version',
            'attributes' => [                
                'id' => 'version'
            ],
            'options' => [
                'label' => 'Version',
                'value_options' => [
                    FSHStudent::VER_FS9 => 'English/Spanish HTML5',
                    FSHStudent::VER_FS6H => 'English Flash',
                    FSHStudent::VER_FS6H => 'Spanish Flash',
                ]
            ],
        ]);

        // Add "training done" field
        $this->add([
            'type'  => 'text',
            'name' => 'trainging-done',
            'attributes' => [                
                'id' => 'training-done'
            ],
            'options' => [
                'label' => 'Training Done',
                'value_options' => [
                    FSHStudent::FINISHED => 'Yes',
                    FSHStudent::UNFINISHED => 'No',
                ]
            ],
        ]);

        // Add "expiration date" field
        $this->add([
            'type'  => 'text',
            'name' => 'end-date',
            'attributes' => [                
                'id' => 'end-date'
            ],
            'options' => [
                'label' => 'Expiration Date',
            ],
        ]);

        // Add "question group" field
        $this->add([
            'type'  => 'text',
            'name' => 'end-date',
            'attributes' => [                
                'id' => 'end-date'
            ],
            'options' => [
                'label' => 'Expiration Date',
            ],
        ]);

        // Add "jurisdiction" field
        $this->add([
            'type'  => 'text',
            'name' => 'jurisdiction',
            'attributes' => [                
                'id' => 'jurisdiction'
            ],
            'options' => [
                'label' => 'Jurisdiction',
            ],
        ]);

        // Add "gender" field
        $this->add([
            'type'  => 'text',
            'name' => 'gender',
            'attributes' => [                
                'id' => 'gender'
            ],
            'options' => [
                'label' => 'gender',
            ],
        ]);

        // Add "question group" field
        $this->add([
            'type'  => 'text',
            'name' => 'store-number',
            'attributes' => [                
                'id' => 'store-number'
            ],
            'options' => [
                'label' => 'Store Number',
            ],
        ]);
        
        
        // Add the submit button
        $this->add([
            'type'  => 'submit',
            'name' => 'submit',
            'attributes' => [                
                'value' => 'Save Student',
                'id' => 'submitbutton',
            ],
        ]);
    }
    
    /**
     * This method creates input filter (used for form filtering/validation).
     */
    private function addInputFilter() 
    {
        
        $inputFilter = new InputFilter();        
        $this->setInputFilter($inputFilter);
        
        $inputFilter->add([
                'name'     => 'title',
                'required' => true,
                'filters'  => [
                    ['name' => 'StringTrim'],
                    ['name' => 'StripTags'],
                    ['name' => 'StripNewlines'],
                ],                
                'validators' => [
                    [
                        'name'    => 'StringLength',
                        'options' => [
                            'min' => 1,
                            'max' => 1024
                        ],
                    ],
                ],
            ]);
        
        $inputFilter->add([
                'name'     => 'content',
                'required' => true,
                'validators' => [
                    [
                        'name'    => 'StringLength',
                        'options' => [
                            'min' => 1,
                            'max' => 4096
                        ],
                    ],
                ],
            ]);   
        
        $inputFilter->add([
                'name'     => 'tags',
                'required' => true,
                'filters'  => [                    
                    ['name' => 'StringTrim'],
                    ['name' => 'StripTags'],
                    ['name' => 'StripNewlines'],
                ],                
                'validators' => [
                    [
                        'name'    => 'StringLength',
                        'options' => [
                            'min' => 1,
                            'max' => 1024
                        ],
                    ],
                ],
            ]);
    }
}

