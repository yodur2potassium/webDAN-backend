<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classe Error, décrit une erreur et ses solutions, peut être liée à un Article, une Image,
 *  une Video ou null
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
     * Titre synthétique de l'erreur
     * Title of the error
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     * Description de l'erreur et solutions pour y remedier, avec exemple de code si besoin
     *  Description of the error and solution with code exemple (if needed)
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     * Bloc de code remplaçant celui contenu par l'attribut de l'entité concerné par l'erreur
     *  Block of code to fix the attribute the error is linked to
     * @ORM\Column(name="correction", type="text")
     */
    private $correction;

    /**
     * @var int
     * Code "interne", utilisé pour lier visuellement l'erreur a son objet
     *  Code used to visualy link error to object
     * @ORM\Column(name="internCode", type="integer", unique=true)
     */
    private $internCode;

    /**
     * @var int
     * Code réference à la notice AcceDe Web
     *  Code referencing the error on external site (AccedeWeb)
     * @ORM\Column(name="accedeCode", type="integer")
     */
    private $accedeCode;

    /**
     * @var array
     * Tableau de Documentation, liens vers ressources externes
     *  Array of web links to documentation and good practices on the error
     * @ORM\OneToMany(targetEntity="Documentation", mappedBy="error")
     */
    private $documentations;

    /**
     * @var string
     * Nom de l'attribut lié à l'erreur
     *  Name of the attribute the error refer to
     * @ORM\Column(name="target", type="string", length=255)
     */
    private $target;
    
    /**
     * @var Date
     * Date de création, auto à l'instanciation...
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;
    
    /**
     * Article lié a l'erreur, peut être null
     * @ORM\ManyToOne(targetEntity="Article", inversedBy="errors")
     * @ORM\JoinColumn(name="article_id", referencedColumnName="id")
     */
    private $article;
    
    /**
     * Image liée a l'erreur, peut être null
     * @ORM\ManyToOne(targetEntity="Image", inversedBy="errors")
     * @ORM\JoinColumn(name="image_id", referencedColumnName="id")
     */
    private $image;
    
    /**
     * Video liée à l'erreur, peut être null
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
     * Set target
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

    /**
     * Add documentation
     *
     * @param \AppBundle\Entity\Documentation $documentation
     *
     * @return Error
     */
    public function addDocumentation(\AppBundle\Entity\Documentation $documentation)
    {
        $this->documentations[] = $documentation;
        $documentation->setError($this);

        return $this;
    }

    /**
     * Remove documentation
     *
     * @param \AppBundle\Entity\Documentation $documentation
     */
    public function removeDocumentation(\AppBundle\Entity\Documentation $documentation)
    {
        $this->documentations->removeElement($documentation);
        $documentation->setError(null);
    }

    /**
     * Get documentations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDocumentations()
    {
        return $this->documentations;
    }
}
