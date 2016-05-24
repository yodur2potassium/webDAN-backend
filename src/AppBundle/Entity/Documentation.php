<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classe de Documentation, simple, relie Erreur à des ressources externes en FR ou EN
 *
 * @ORM\Table(name="documentation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DocumentationRepository")
 */
class Documentation
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
     *
     * @ORM\Column(name="source", type="string", length=255)
     */
    private $source;

    /**
     * @var string
     *
     * @ORM\Column(name="lang", type="string", length=25)
     */
    private $lang;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="Error", inversedBy="documentations")
     * @ORM\JoinColumn(name="error_id", referencedColumnName="id")
     */
    private $error;
    

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
     * Set source
     *
     * @param string $source
     *
     * @return Documentation
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
     * Set lang
     *
     * @param string $lang
     *
     * @return Documentation
     */
    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Get lang
     *
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Set error
     *
     * @param \AppBundle\Entity\Error $error
     *
     * @return Documentation
     */
    public function setError(\AppBundle\Entity\Error $error = null)
    {
        $this->error = $error;

        return $this;
    }

    /**
     * Get error
     *
     * @return \AppBundle\Entity\Error
     */
    public function getError()
    {
        return $this->error;
    }
}
