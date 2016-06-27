<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Classe Article, peut comprendre une ou plusieurs Image et/ou Video
 *  et être lié à une ou plusieurs Erreur
 * Table "article" en BDD
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ArticleRepository")
 */
class Article
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * Titre de l'article, formatté HTML
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     * Sous titre, ou courte phrase descriptive, formatté HTML
     * @ORM\Column(name="subtitle", type="string", length=255)
     */
    private $subtitle;

    /**
     * @var string
     * Contenu de l'article, formatté HTML
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var string
     * Auteur, non pertinent, par défaut Anonyme...
     * @ORM\Column(name="author", type="string", length=255, nullable=true)
     */
    private $author;

    /**
     * @var \DateTime
     * Date de création, automatique a l'instanciation
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;
    
    /**
     * @var array
     * Tableau d'Images, peut être vide
     * @ORM\OneToMany(targetEntity="Image", mappedBy="article") 
     */
    private $images;
    
    /**
     * @var array
     * Tableau de Videos, peut être vide
     * @ORM\OneToMany(targetEntity="Video", mappedBy="article") 
     */
    private $videos;
    
    /**
     * @var array
     * Tableau d'Erreurs, peut être vide
     * @ORM\OneToMany(targetEntity="Error", mappedBy="article")
     */
    private $errors;
    
  
    public  function __construct() {
        $this->created = new \DateTime();
        $this->author = "Anonyme";
        $this->images = new ArrayCollection();
        $this->videos = new ArrayCollection();
        $this->errors = new ArrayCollection();
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Article
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set subtitle
     *
     * @param string $subtitle
     *
     * @return Article
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    /**
     * Get subtitle
     *
     * @return string
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Article
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set author
     *
     * @param string $author
     *
     * @return Article
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Article
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Add image
     *
     * @param \AppBundle\Entity\Image $image
     *
     * @return Article
     */
    public function addImage(\AppBundle\Entity\Image $image)
    {
        // Ajoute une Image au tableau
        $this->images[] = $image;
        // Reciproque, associe l'Article a Image
        $image->setArticle($this);

        return $this;
    }

    /**
     * Remove image
     *
     * @param \AppBundle\Entity\Image $image
     */
    public function removeImage(\AppBundle\Entity\Image $image)
    {
        // Retire la relation Article/Image
        $this->images->removeElement($image);
        $image->setArticle();
    }

    /**
     * Get images
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Add video
     *
     * @param \AppBundle\Entity\Video $video
     *
     * @return Article
     */
    public function addVideo(\AppBundle\Entity\Video $video)
    {
        // Ajoute une Video au tableau
        $this->videos[] = $video;
        // Réciproque, associe l'Article à une Video
        $video->setArticle($this);

        return $this;
    }

    /**
     * Remove video
     *
     * @param \AppBundle\Entity\Video $video
     */
    public function removeVideo(\AppBundle\Entity\Video $video)
    {
        // Retire la relation Article/Video
        $this->videos->removeElement($video);
        $video->setArticle();
    }

    /**
     * Get videos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVideos()
    {
        return $this->videos;
    }

    /**
     * Add error
     *
     * @param \AppBundle\Entity\Error $error
     *
     * @return Article
     */
    public function addError(\AppBundle\Entity\Error $error)
    {        
        // Ajoute une Erreur au tableau
        $this->errors[] = $error;
        // Réciproque, associe l'Article à une Erreur
        $error->setArticle($this);
        return $this;
    }

    /**
     * Remove error
     *
     * @param \AppBundle\Entity\Error $error
     */
    public function removeError(\AppBundle\Entity\Error $error)
    {       
        // Retire la relation Article/Video
        $this->errors->removeElement($error);
        $error->setArticle();
    }

    /**
     * Get errors
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getErrors()
    {
        return $this->errors;
    }
    
    public function __toString() {
        
        return $this->title;
    }
}
