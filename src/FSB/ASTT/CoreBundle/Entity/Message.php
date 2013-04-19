<?php

namespace FSB\ASTT\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FSB\ASTT\CoreBundle\Entity\Message
 */
class Message
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var datetime $createdAt
     */
    private $createdAt;

    /**
     * @var datetime $updatedAt
     */
    private $updatedAt;

    /**
     * @var boolean $deleted
     */
    private $deleted;

    /**
     * @var string $auteur
     */
    private $author;

    /**
     * @var string $club
     */
    private $club;

    /**
     * @var text $description
     */
    private $description;

    /**
     * @var text $clientIp
     */
    private $clientIp;

    /**
     * @var text $clientHost
     */
    private $clientHost;
    
    /**
     * Constructor
     * 
     * Set default values to the instance 
     */
    public function __construct()
    {
        $this->createdAt = new \Datetime('now');
        $this->updatedAt = new \Datetime('now');
        $this->deleted = false;
        $this->clientIp = null;
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set createdAt
     *
     * @param datetime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Get createdAt
     *
     * @return datetime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param datetime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Get updatedAt
     *
     * @return datetime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    }

    /**
     * Get deleted
     *
     * @return boolean 
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set author
     *
     * @param string $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
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
     * Set club
     *
     * @param string $club
     */
    public function setClub($club)
    {
        $this->club = $club;
    }

    /**
     * Get club
     *
     * @return string 
     */
    public function getClub()
    {
        return $this->club;
    }

    /**
     * Set description
     *
     * @param text $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return text 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set client IP
     *
     * @param string $clientIp
     */
    public function setClientIp($clientIp)
    {
        $this->clientIp = $clientIp;
    }

    /**
     * Get client IP
     *
     * @return string 
     */
    public function getClientIp()
    {
        return $this->clientIp;
    }

    /**
     * Set client Host name
     *
     * @param string $clientHost
     */
    public function setClientHost($clientHost)
    {
        $this->clientHost = $clientHost;
    }

    /**
     * Get client Host name
     *
     * @return string 
     */
    public function getClientHost()
    {
        return $this->clientHost;
    }
    
    /**
     * __toString
     * 
     * @return string 
     */
    public function __toString()
    {
        return $this->author.' ['.$this->club.']';
    }
}