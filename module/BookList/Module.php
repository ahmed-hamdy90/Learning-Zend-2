<?php

namespace BookList;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;

/**
 *  Module class for BookList Module
 * 
 * @author ahmedhamdy <ahmedhamdy20@gmail.com>
 */
class Module implements AutoloaderProviderInterface,ConfigProviderInterface {
    
    /**
     * {@inheritdoc} 
     */
    public function getAutoloaderConfig() {
         return array(
             'Zend\Loader\ClassMapAutoloader' => array(
                 __DIR__ . '/autoload_classmap.php',
             ),
             'Zend\Loader\StandardAutoloader' => array(
                 'namespaces' => array(
                     __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                 ),
             ),
         );
    }
    
    /**
     * {@inheritdoc} 
     */
    public function getConfig() {
        return include __DIR__ . '/config/module.config.php' ;
    }
    
}
