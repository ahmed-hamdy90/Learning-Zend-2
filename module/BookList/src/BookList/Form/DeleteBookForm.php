<?php
namespace BookList\Form;

use Zend\Form\Form;

/**
 * Delete Book Form
 * 
 * @author ahmed hamdy <ahmedhamdy20@gmail.com>
 */
Class DeleteBookForm extends Form
{
    /**
     * delete Form Constructor 
     * @param string $name
     */    
    public function __construct($name = null)
    {
        parent::__construct("delete-book");
        
        $this->add(array(
            "name" => "id",
            "type" => "Hidden"
        ));
                
        $this->add(array(
            "name" => "submit-yes",
            "type" => "Submit",
            "attributes" => array(
                "value" => "yes",
            )
        ));
        
        $this->add(array(
            "name" => "submit-no",
            "type" => "Submit",
            "attributes" => array(
                "value" => "No",
            )
        ));
    }
}