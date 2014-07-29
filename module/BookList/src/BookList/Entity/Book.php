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
    
}
