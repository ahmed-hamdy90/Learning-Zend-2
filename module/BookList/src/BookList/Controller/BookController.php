<?php
namespace BookList\Controller;
 
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use BookList\Form\BookForm;
use BookList\Form\DeleteBookForm;

/**
 * Book Controller
 *
 * @author ahmedhamdy <ahmedhmady20@gmail.com>
 */
class BookController extends AbstractActionController
{
    private $title;

    /**
     * index action to display all books
     * 
     * @return ViewModel view object   
     */
    public function indexAction()
    {
        $this->title = "My Books";
        return new ViewModel(array(
            "title" => $this->title,
            "books" => array()
        ));
    }
    
    /**
     * add action to add a new book
     * 
     * @return ViewModel view object 
     */
    public function addAction()
    {
        $this->title = "add new Book";
        $form = new BookForm();
            // next line will get field in Form and change value for submit button to Add   
            //$form->get("submit")->setValue("Add");
            // Another way 
            //$form->get('submit')->setAttribute('value', 'Add');
        
        // next line used to get url request  
        $reguest = $this->getRequest();
        if($reguest->isPost()){
            
        }
        
        return new ViewModel(array(
            "title" => $this->title,
            "form"  => $form,
        ));
    }
    
    /**
     * edit action to edit  an existed book
     * 
     * @return ViewModel view object 
     */
    public function editAction()
    {
        $this->title = "Edit Book";
        // get id value from route and set default value is missed 0 
        $id = $this->params()->fromRoute("id",0);
        if(!$id || $id == 0){
            // to display 404 not found exception in case id is missed in Request  
            return $this->notFoundAction();            
            // another way to display 404 not found exception
            //$this->getResponse()->setStatusCode(404);
            //return;           
        }
        $form  = new BookForm();
            //$form->bind($book);
            $form->get('submit')->setValue('Edit');
            
        $request = $this->getRequest();
        if($request->isPost()){
            
        }
        
        return new ViewModel(array(
            'title' => $this->title,
            'id' => $id,
            'form' => $form,
        ));
    }
    
    /**
     * delete action to delete an existed book
     * 
     * @return ViewModel view object 
     */
    public function deleteAction()
    {
        $this->title = "Delete Book";
        $id = $this->params()->fromRoute('id', 0);
        if(!$id || $id == 0){
            
            return $this->notFoundAction();
        }
        
        $titleOfBook = "learning Zend 2";
        $authorOfBook = "no one";
                
        $deleteForm = new DeleteBookForm();
            $deleteForm->get('id')->setValue($id);
        
        $request = $this->getRequest();
        if($request->isPost()){
            $submitButton = $request->getPost("submit-yes","no"); 
            
            if($submitButton == "yes"){
                echo "yes";
            }else if($submitButton == "no"){
                echo "no";
            }
            
        }
        
        return new ViewModel(array(
            "title" => $this->title,
            "id" => $id,
            "titleOfBook" => $titleOfBook,
            "authorOfBook" => $authorOfBook,
            "deleteForm" => $deleteForm,
        ));
    }
}

