<?php
namespace Album\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Album Controller has been created using ZFTool 
 *
 * @author ahmedhamdy <ahmedhmady20@gmail.com>
 */
class AlbumController extends AbstractActionController
{
    /**
     * index action to display all albums
     * 
     * @return ViewModel 
     */
    public function indexAction()
    {
        return new ViewModel();
    }
    
    /**
     * add action to add a new album
     * 
     * @return ViewModel
     */
    public function addAction()
    {
        return new ViewModel();
    }
        
    /**
     * edit action to edit  an existed album
     * 
     * @return ViewModel
     */
    public function editAction()
    {
        return new ViewModel();
    }
    
    /**
     * delete action to delete an existed album
     * 
     * @return ViewModel 
     */
    public function deleteAction()
    {
        return new ViewModel();
    }
}

