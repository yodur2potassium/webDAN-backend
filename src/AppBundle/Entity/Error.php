<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Error
 *
 * @ORM\Table(name="error")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ErrorRepository")
 */
class Error
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
     *  Title of the error
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *  Description of the error and solution with code exemple (if needed)
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *  Block of code to fix the attribute the error is linked to
     * @ORM\Column(name="correction", type="text")
     */
    private $correction;

    /**
     * @var int
     *  Code used to visualy link error to object
     * @ORM\Column(name="internCode", type="integer", unique=true)
     */
    private $internCode;

    /**
     * @var int
     *  Code referencing the error on external site (AccedeWeb)
     * @ORM\Column(name="accedeCode", type="integer")
     */
    private $accedeCode;

    /**
     * @var string
     *  Array of web links to documentation and good practices on the error
     * @ORM\Column(name="docLinks", type="string", length=255)
     */
    private $docLinks;

    /**
     * @var string
     *  Name of the attribute the error refer to
     * @ORM\Column(name="target", type="string", length=255)
     */
    private $target;
    
    /**
     * @var Date
     * 
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;
    
    /**
     * @ORM\ManyToOne(targetEntity="Article", inversedBy="errors")
     * @ORM\JoinColumn(name="article_id", referencedColumnName="id")
     */
    private $article;
    
    /**
     * @ORM\ManyToOne(targetEntity="Image", inversedBy="errors")
     * @ORM\JoinColumn(name="image_id", referencedColumnName="id")
     */
    private $image;
    
    /**
     * @ORM\ManyToOne(targetEntity="Video", inversedBy="errors")
     * @ORM\JoinColumn(name="video_id", referencedColumnName="id")
     */
    private $video;
   
    
    public function __construct() {
        $this->created = new \DateTime;
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
     * @return Error
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
     * Set description
     *
     * @param string $description
     *
     * @return Error
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set correction
     *
     * @param string $correction
     *
     * @return Error
     */
    public function setCorrection($correction)
    {
        $this->correction = $correction;

        return $this;
    }

    /**
     * Get correction
     *
     * @return string
     */
    public function getCorrection()
    {
        return $this->correction;
    }

    /**
     * Set internCode
     *
     * @param integer $internCode
     *
     * @return Error
     */
    public function setInternCode($internCode)
    {
        $this->internCode = $internCode;

        return $this;
    }

    /**
     * Get internCode
     *
     * @return int
     */
    public function getInternCode()
    {
        return $this->internCode;
    }

    /**
     * Set accedeCode
     *
     * @param integer $accedeCode
     *
     * @return Error
     */
    public function setAccedeCode($accedeCode)
    {
        $this->accedeCode = $accedeCode;

        return $this;
    }

    /**
     * Get accedeCode
     *
     * @return int
     */
    public function getAccedeCode()
    {
        return $this->accedeCode;
    }

    /**
     * Set docLinks
     *
     * @param string $docLinks
     *
     * @return Error
     */
    public function setDocLinks($docLinks)
    {
        $this->docLinks = $docLinks;

        return $this;
    }

    /**
     * Get docLinks
     *
     * @return string
     */
    public function getDocLinks()
    {
        return $this->docLinks;
    }

    /**
     * Set targets
     *
     * @param string $target
     *
     * @return Error
     */
    public function setTarget($target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * Get target
     *
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }
    
     /**
     * Get created
     *
     * @return Date
     */
    public function getCreated() {
        return $this->created;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Error
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Set article
     *
     * @param \AppBundle\Entity\Article $article
     *
     * @return Error
     */
    public function setArticle(\AppBundle\Entity\Article $article = null)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \AppBundle\Entity\Article
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Set image
     *
     * @param \AppBundle\Entity\Image $image
     *
     * @return Error
     */
    public function setImage(\AppBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \AppBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set video
     *
     * @param \AppBundle\Entity\Video $video
     *
     * @return Error
     */
    public function setVideo(\AppBundle\Entity\Video $video = null)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get video
     *
     * @return \AppBundle\Entity\Video
     */
    public function getVideo()
    {
        return $this->video;
    }
}
