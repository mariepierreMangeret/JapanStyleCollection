<?php

namespace JSC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Brand
 *
 * @ORM\Table(name="jsc_brand")
 * @ORM\Entity(repositoryClass="JSC\PlatformBundle\Repository\BrandRepository")
 */
class Brand
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="concept", type="string", length=255)
     */
    private $concept;

    /**
     * @var string
     *
     * @ORM\Column(name="urlWebsite", type="string", length=255)
     */
    private $urlWebsite;

    /**
     * @var string
     *
     * @ORM\Column(name="urlFacebook", type="string", length=255)
     */
    private $urlFacebook;

    /**
     * @var string
     *
     * @ORM\Column(name="urlInstagram", type="string", length=255)
     */
    private $urlInstagram;

    /**
     * @var string
     *
     * @ORM\Column(name="urlTwitter", type="string", length=255)
     */
    private $urlTwitter;


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
     * Set name
     *
     * @param string $name
     *
     * @return Brand
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Brand
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set concept
     *
     * @param string $concept
     *
     * @return Brand
     */
    public function setConcept($concept)
    {
        $this->concept = $concept;

        return $this;
    }

    /**
     * Get concept
     *
     * @return string
     */
    public function getConcept()
    {
        return $this->concept;
    }

    /**
     * Set urlWebsite
     *
     * @param string $urlWebsite
     *
     * @return Brand
     */
    public function setUrlWebsite($urlWebsite)
    {
        $this->urlWebsite = $urlWebsite;

        return $this;
    }

    /**
     * Get urlWebsite
     *
     * @return string
     */
    public function getUrlWebsite()
    {
        return $this->urlWebsite;
    }

    /**
     * Set urlFacebook
     *
     * @param string $urlFacebook
     *
     * @return Brand
     */
    public function setUrlFacebook($urlFacebook)
    {
        $this->urlFacebook = $urlFacebook;

        return $this;
    }

    /**
     * Get urlFacebook
     *
     * @return string
     */
    public function getUrlFacebook()
    {
        return $this->urlFacebook;
    }

    /**
     * Set urlInstagram
     *
     * @param string $urlInstagram
     *
     * @return Brand
     */
    public function setUrlInstagram($urlInstagram)
    {
        $this->urlInstagram = $urlInstagram;

        return $this;
    }

    /**
     * Get urlInstagram
     *
     * @return string
     */
    public function getUrlInstagram()
    {
        return $this->urlInstagram;
    }

    /**
     * Set urlTwitter
     *
     * @param string $urlTwitter
     *
     * @return Brand
     */
    public function setUrlTwitter($urlTwitter)
    {
        $this->urlTwitter = $urlTwitter;

        return $this;
    }

    /**
     * Get urlTwitter
     *
     * @return string
     */
    public function getUrlTwitter()
    {
        return $this->urlTwitter;
    }
}

