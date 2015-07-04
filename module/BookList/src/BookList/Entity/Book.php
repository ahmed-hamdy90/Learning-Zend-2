<?php

namespace BookList\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Book Entity
 * 
 * @ORM\Table(name="book")
 * @ORM\Entity(repositoryClass = "BookRepository")
 * @author ahmed hamdy <ahmedhamdy20@gmail.com>
 */
class Book
{

    /**
     * @var integer
     * 
     * @ORM\Id 
     * @ORM\Column(name="id", type="integer")  
     * @ORM\GeneratedValue(strategy="AUTO") 
     */
    private  $_id;

    /**
     * @var string
     * 
     * @ORM\Column(name="title", type="string", length = 255, nullable=true)  
     */    
    private $_title;

    /**
     * @var string
     * 
     * @ORM\Column(name="author", type="string", length = 255, nullable=true)  
     */    
    private $_author;
    

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId(){
        
        return $this->_id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Book
     */
    public function setTitle($title){
        
        $this->_title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle(){
        
        return $this->_title;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return Book
     */
    public function setAuthor($author){
        
        $this->_author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor(){
        
        return $this->_author;
    }
}
