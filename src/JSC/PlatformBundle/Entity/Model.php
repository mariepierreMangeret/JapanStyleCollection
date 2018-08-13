<?php

namespace JSC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\MediaBundle\Model\MediaInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Model
 *
 * @ORM\Table(name="jsc_model")
 * @ORM\Entity(repositoryClass="JSC\PlatformBundle\Repository\ModelRepository")
 */
class Model
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
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var smallint
     *
     * @ORM\Column(name="priority", type="smallint")
     */
    private $priority;

    /**
     * @var string
     *
     * @ORM\Column(name="position", type="string", length=50)
     */
    private $position;

    /**
     * @var \Application\Sonata\MediaBundle\Entity\Media
     *
     * @ORM\ManyToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media", cascade={"persist"}, fetch="LAZY")
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="urlFacebook", type="string", length=255, nullable=true)
     */
    private $urlFacebook;

    /**
     * @var string
     *
     * @ORM\Column(name="urlTwitter", type="string", length=255, nullable=true)
     */
    private $urlTwitter;

    /**
     * @var string
     *
     * @ORM\Column(name="urlInstagram", type="string", length=255, nullable=true)
     */
    private $urlInstagram;


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
     * @return Model
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
     * Set priority
     *
     * @param smallint $priority
     *
     * @return Model
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return smallint
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set position
     *
     * @param string $position
     *
     * @return Model
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set image
     *
     * @param MediaInterface $image
     *
     * @return Model
     */
    public function setImage(MediaInterface $media)
    {
        $this->image = $media;
    }

    /**
     * Get image
     *
     * @return MediaInterface
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set urlFacebook
     *
     * @param string $urlFacebook
     *
     * @return Model
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
     * Set urlTwitter
     *
     * @param string $urlTwitter
     *
     * @return Model
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

    /**
     * Set urlInstagram
     *
     * @param string $urlInstagram
     *
     * @return Model
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
}

