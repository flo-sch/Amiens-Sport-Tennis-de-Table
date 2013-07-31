<?php

namespace FSB\ASTT\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FSB\ASTT\CoreBundle\Entity\Event
 */
class Event
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
     * @var string $title
     */
    private $title;

    /**
     * @var text $description
     */
    private $description;

    /**
     * @var string $place
     */
    private $place;

    /**
     * @var datetime $date
     */
    private $date;

    /**
     * @var boolean $isTournament
     */
    private $isTournament;

    public function __construct()
    {
        $this->createdAt = new \Datetime('now');
        $this->updatedAt = new \Datetime('now');
        $this->deleted = false;
        $this->date = new \Datetime('now');
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
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
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
     * Set place
     *
     * @param string $place
     */
    public function setPlace($place)
    {
        $this->place = $place;
    }

    /**
     * Get place
     *
     * @return string 
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set date
     *
     * @param datetime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * Get date
     *
     * @return datetime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set isTournament
     *
     * @param boolean $isTournament
     */
    public function setIsTournament($isTournament)
    {
        $this->isTournament = $isTournament;
    }

    /**
     * Get isTournament
     *
     * @return boolean 
     */
    public function getIsTournament()
    {
        return $this->isTournament;
    }
    
    /**
     * toString
     * 
     * @return string 
     */
    public function __toString()
    {
        return $this->title;
    }

    /**
     * toArray
     * 
     * @return array 
     */
    public function toArray()
    {
        return array(
            'id' => $this->getId(),
            'createdAt' => $this->getCreatedAt(),
            'updatedAt' => $this->getUpdatedAt(),
            'deleted' => $this->getDeleted(),
            'title' => $this->getTitle(),
            'description' => $this->getDescription(),
            'place' => $this->getPlace(),
            'date' => $this->getDate(),
            'tournament' => $this->getIsTournament()
        );
    }
}