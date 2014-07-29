<?php

namespace BookList\Form;

use Zend\Form\Form;

/**
 * Book Form to add and edit book [ id,title and author Fields ]
 * 
 * @author ahmed hamdy <ahmedhamdy20@gmail.com>
 */
Class BookForm extends Form{
    
    /**
     * Book Form Constructor 
     * @param string $name
     */    
    public function __construct($name = null) {
        
        parent::__construct("book");
        
        // add id field as Hidden field
        $this->add(array(
            "name" => "id",
            "type" => "Hidden"
        ));
        
        // add title field as Text filed
        $this->add(array(
            "name" => "title",
            "type" => "Text",
            "options" => array(
                "label" => "Title :"
            )
        ));
        
        // add author field as Text field
        $this->add(array(
            "name" => "author",
            "type" => "Text",
            "options" => array(
                "label" => "Author :"
            )
        ));
        
        // add submit button 
        $this->add(array(
            "name" => "submit",
            "type" => "Submit",
            "attributes" => array(
                "value" => "Add",
                "id" => "submitButton"
            )
        ));
    }
}