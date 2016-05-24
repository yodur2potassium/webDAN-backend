<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classe Video, peut être liée a un Article
 *
 * @ORM\Table(name="video")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VideoRepository")
 */
class Video
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
     * Description de la Video
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     * Transcritpion de la Video
     * @ORM\Column(name="transcription", type="text")
     */
    private $transcription;

    /**
     * @var string
     * Sous titre informatif dut contenu
     * @ORM\Column(name="caption", type="string", length=255)
     */
    private $caption;

    /**
     * @var string
     * Source de la Video, typiquement lien Libcast
     * @ORM\Column(name="source", type="string", length=255)
     */
    private $source;

    /**
     * Article lié a la Video, peut être null
     * @ORM\ManyToOne(targetEntity="Article", inversedBy="videos")
     * @ORM\JoinColumn(name="article_id", referencedColumnName="id")
     */
    private $article;

    /**
     * @var array
     * Tableau d'Error, peut être null
     * @ORM\OneToMany(targetEntity="Error", mappedBy="video")
     */
    private $errors;
    
    public function __construct() {
        $this->errors = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set description
     *
     * @param string $description
     *
     * @return Video
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
     * Set transcription
     *
     * @param string $transcription
     *
     * @return Video
     */
    public function setTranscription($transcription)
    {
        $this->transcription = $transcription;

        return $this;
    }

    /**
     * Get transcription
     *
     * @return string
     */
    public function getTranscription()
    {
        return $this->transcription;
    }

    /**
     * Set caption
     *
     * @param string $caption
     *
     * @return Video
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;

        return $this;
    }

    /**
     * Get caption
     *
     * @return string
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * Set source
     *
     * @param string $source
     *
     * @return Video
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set article
     *
     * @param \AppBundle\Entity\Article $article
     *
     * @return Video
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
     * Add error
     *
     * @param \AppBundle\Entity\Error $error
     *
     * @return Video
     */
    public function addError(\AppBundle\Entity\Error $error)
    {
        $this->errors[] = $error;

        return $this;
    }

    /**
     * Remove error
     *
     * @param \AppBundle\Entity\Error $error
     */
    public function removeError(\AppBundle\Entity\Error $error)
    {
        $this->errors->removeElement($error);
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
}
