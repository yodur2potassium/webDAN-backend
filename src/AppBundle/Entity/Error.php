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
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="correction", type="text")
     */
    private $correction;

    /**
     * @var int
     *
     * @ORM\Column(name="internCode", type="integer", unique=true)
     */
    private $internCode;

    /**
     * @var int
     *
     * @ORM\Column(name="accedeCode", type="integer")
     */
    private $accedeCode;

    /**
     * @var array
     *
     * @ORM\Column(name="docLinks", type="array")
     */
    private $docLinks = [];

    /**
     * @var array
     *
     * @ORM\Column(name="targets", type="array")
     */
    private $targets = [];


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
     * @param array $docLinks
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
     * @return array
     */
    public function getDocLinks()
    {
        return $this->docLinks;
    }

    /**
     * Set targets
     *
     * @param array $targets
     *
     * @return Error
     */
    public function setTargets($targets)
    {
        $this->targets = $targets;

        return $this;
    }

    /**
     * Get targets
     *
     * @return array
     */
    public function getTargets()
    {
        return $this->targets;
    }
}

