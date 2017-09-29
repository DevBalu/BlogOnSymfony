<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * aboutEntity
 *
 * @ORM\Table(name="about_entity")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\aboutEntityRepository")
 */
class aboutEntity
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
     * @ORM\Column(name="img", type="string", length=255)
     */
    private $img;

    /**
     * @var string
     *
     * @ORM\Column(name="nickname", type="string", length=255)
     */
    private $nickname;

    /**
     * @var string
     *
     * @ORM\Column(name="globInfo", type="string", length=255)
     */
    private $globInfo;

    /**
     * @var string
     *
     * @ORM\Column(name="contactInfo", type="string", length=255)
     */
    private $contactInfo;


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
     * Set img
     *
     * @param string $img
     *
     * @return aboutEntity
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set nickname
     *
     * @param string $nickname
     *
     * @return aboutEntity
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Get nickname
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Set globInfo
     *
     * @param string $globInfo
     *
     * @return aboutEntity
     */
    public function setGlobInfo($globInfo)
    {
        $this->globInfo = $globInfo;

        return $this;
    }

    /**
     * Get globInfo
     *
     * @return string
     */
    public function getGlobInfo()
    {
        return $this->globInfo;
    }

    /**
     * Set contactInfo
     *
     * @param string $contactInfo
     *
     * @return aboutEntity
     */
    public function setContactInfo($contactInfo)
    {
        $this->contactInfo = $contactInfo;

        return $this;
    }

    /**
     * Get contactInfo
     *
     * @return string
     */
    public function getContactInfo()
    {
        return $this->contactInfo;
    }
}

