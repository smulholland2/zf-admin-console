<?php
namespace Blog\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * This class represents a single post in a blog.
 * @ORM\Entity(repositoryClass="\Blog\Repository\PostRepository")
 * @ORM\Table(name="[Post]")
 */
class Post 
{
    // Post status constants.
    const STATUS_DRAFT       = 1; // Draft.
    const STATUS_PUBLISHED   = 2; // Published.

    /**
     * @ORM\Id
     * @ORM\Column(name="Id")
     * @ORM\GeneratedValue
     */
    protected $id;

    /** 
     * @ORM\Column(name="Title")  
     */
    protected $title;

    /** 
     * @ORM\Column(name="Content")  
     */
    protected $content;

    /** 
     * @ORM\Column(name="Status")  
     */
    protected $status;

    /**
     * @ORM\Column(name="DateCreated")  
     */
    protected $dateCreated;
    
    /**
     * @ORM\OneToMany(targetEntity="\Blog\Entity\Comment", mappedBy="Post")
     * @ORM\JoinColumn(name="Id", referencedColumnName="Post")
     */
    protected $comments;
    
    /**
     * @ORM\ManyToMany(targetEntity="\Blog\Entity\Tag", inversedBy="Post")
     * @ORM\JoinTable(name="PostTag",
     *      joinColumns={@ORM\JoinColumn(name="PostId", referencedColumnName="Id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="TagId", referencedColumnName="Id")}
     *      )
     */
    protected $tags;
    
    /**
     * Constructor.
     */
    public function __construct() 
    {
        $this->comments = new ArrayCollection();        
        $this->tags = new ArrayCollection();        
    }

    /**
     * Returns ID of this post.
     * @return integer
     */
    public function getId() 
    {
        return $this->id;
    }

    /**
     * Sets ID of this post.
     * @param int $id
     */
    public function setId($id) 
    {
        $this->id = $id;
    }

    /**
     * Returns title.
     * @return string
     */
    public function getTitle() 
    {
        return $this->title;
    }

    /**
     * Sets title.
     * @param string $title
     */
    public function setTitle($title) 
    {
        $this->title = $title;
    }

    /**
     * Returns status.
     * @return integer
     */
    public function getStatus() 
    {
        return $this->status;
    }

    /**
     * Sets status.
     * @param integer $status
     */
    public function setStatus($status) 
    {
        $this->status = $status;
    }   
    
    /**
     * Returns post content.
     */
    public function getContent() 
    {
       return $this->content; 
    }
    
    /**
     * Sets post content.
     * @param type $content
     */
    public function setContent($content) 
    {
        $this->content = $content;
    }
    
    /**
     * Returns the date when this post was created.
     * @return datetime
     */
    public function getDateCreated() 
    {
        return $this->dateCreated;//-> format('Y-m-d');
    }
    
    /**
     * Sets the date when this post was created.
     * @param string $dateCreated
     */
    public function setDateCreated($dateCreated) 
    {
        $this->dateCreated = $dateCreated;
    }
    
    /**
     * Returns comments for this post.
     * @return array
     */
    public function getComments() 
    {
        return $this->comments;
    }
    
    /**
     * Adds a new comment to this post.
     * @param $comment
     */
    public function addComment($comment) 
    {
        $this->comments[] = $comment;
    }
    
    /**
     * Returns tags for this post.
     * @return array
     */
    public function getTags() 
    {
        return $this->tags;
    }      
    
    /**
     * Adds a new tag to this post.
     * @param $tag
     */
    public function addTag($tag) 
    {
        $this->tags[] = $tag;        
    }
    
    /**
     * Removes association between this post and the given tag.
     * @param type $tag
     */
    public function removeTagAssociation($tag) 
    {
        $this->tags->removeElement($tag);
    }
}

