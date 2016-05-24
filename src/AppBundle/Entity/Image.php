<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Image
 *
 * @ORM\Table(name="image")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ImageRepository")
 */
class Image
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
     * Description précise de l'image, typiquement alt="..."
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     * Sous titre informatif
     * @ORM\Column(name="caption", type="string", length=255, nullable=true)
     */
    private $caption;

    /**
     * @var string
     * Source de l'image, locale ou web
     * @ORM\Column(name="source", type="string", length=255)
     */
    private $source;
    
    /**
     * Article lié a l'image, peut être vide
     * @ORM\ManyToOne(targetEntity="Article", inversedBy="images")
     * @ORM\JoinColumn(name="article_id", referencedColumnName="id")
     */
    private $article;
    
    /**
     * @var array
     * Tableau d'Error
     * @ORM\OneToMany(targetEntity="Error", mappedBy="image")
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
     * @return Image
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
     * Set caption
     *
     * @param string $caption
     *
     * @return Image
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
     * @return Image
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
     * @return Image
     */
    public function setArticle(\AppBundle\Entity\Article $article = null)
    {
        // Associe l'Image à un Article
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
     * @return Image
     */
    public function addError(\AppBundle\Entity\Error $error)
    {
        // Ajoute une Erreur au tableau
        $this->errors[] = $error;
        // Réciproque, associe l'Image à une Error
        $error->setImage($this);
        return $this;
    }

    /**
     * Remove error
     *
     * @param \AppBundle\Entity\Error $error
     */
    public function removeError(\AppBundle\Entity\Error $error)
    {
        // Retire la relation Image/Error
        $this->errors->removeElement($error);
        $error->setImage();
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
