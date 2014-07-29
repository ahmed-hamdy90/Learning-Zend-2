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
class Book {

    /**
     * @var integer
     * 
     * @ORM\Id 
     * @ORM\Column(name="id", type="integer")  
     * @ORM\GeneratedValue(strategy="AUTO") 
     */
    private  $id;

    /**
     * @var string
     * 
     * @ORM\Column(name="title", type="string", length = 255, nullable=true)  
     */    
    private $title;

    /**
     * @var string
     * 
     * @ORM\Column(name="author", type="string", length = 255, nullable=true)  
     */    
    private $author;
    

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId(){
        
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Book
     */
    public function setTitle($title){
        
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle(){
        
        return $this->title;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return Book
     */
    public function setAuthor($author){
        
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor(){
        
        return $this->author;
    }
}
