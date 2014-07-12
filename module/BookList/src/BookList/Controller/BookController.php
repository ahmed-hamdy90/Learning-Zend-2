<?php

namespace BookList\Controller;
 
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use BookList\Form\BookForm;

/**
 * Book Controller
 *
 * @author ahmedhamdy <ahmedhmady20@gmail.com>
 */
class BookController extends AbstractActionController {
    
    /**
     * index action to display all books
     * @return ViewModel view object   
     */
    public function indexAction() {

        $title = "My Books";
        return new ViewModel(array(
            "title" => $title,
            "books" => array()
        ));
    }
    
    /**
     * add action to add a new book
     * @return ViewModel view object 
     */
    public function addAction() {

        $title = "add new Book";
        $form = new BookForm();
        // next line will get field in Form and change value for submit button to Add   
        //$form->get("submit")->setValue("Add");
        // next line used to get url request  
        $reguest = $this->getRequest();
        if($reguest->isPost()){
            
        }
        
        return new ViewModel(array(
            "title" => $title,
            "form"  => $form,
        ));
    }
    
    /**
     * edit action to edit  an existed book
     * 
     */
    public function editAction() {

        
    }
    
    /**
     * delete action to delete an existed book
     * 
     */
    public function deleteAction() {

        
    }
    
}

?>
