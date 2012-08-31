<?php

namespace FSB\ASTT\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FSB\ASTT\CoreBundle\Entity\News
 */
class News
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
     * @var datetime $starttime
     */
    private $starttime;

    /**
     * @var datetime $endtime
     */
    private $endtime;

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
     * @var integer $presentation
     */
    private $presentation;

    /**
     * @var string $screen
     */
    private $screen;

    /**
     * @var FSB\ASTT\CoreBundle\Entity\Player
     */
    private $weBestPlayer;
    
    /**
     * __construct
     * 
     * Set default values
     */
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
     * Set starttime
     *
     * @param datetime $starttime
     */
    public function setStarttime($starttime)
    {
        $this->starttime = $starttime;
    }

    /**
     * Get starttime
     *
     * @return datetime 
     */
    public function getStarttime()
    {
        return $this->starttime;
    }

    /**
     * Set endtime
     *
     * @param datetime $endtime
     */
    public function setEndtime($endtime)
    {
        $this->endtime = $endtime;
    }

    /**
     * Get endtime
     *
     * @return datetime 
     */
    public function getEndtime()
    {
        return $this->endtime;
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
     * Set presentation
     *
     * @param integer $presentation
     */
    public function setPresentation($presentation)
    {
        $this->presentation = $presentation;
    }

    /**
     * Get presentation
     *
     * @return integer 
     */
    public function getPresentation()
    {
        return $this->presentation;
    }

    /**
     * Set screen
     *
     * @param string $screen
     */
    public function setScreen($screen)
    {
        $this->screen = $screen;
    }

    /**
     * Get screen
     *
     * @return string 
     */
    public function getScreen()
    {
        return $this->screen;
    }

    /**
     * Set weBestPlayer
     *
     * @param FSB\ASTT\CoreBundle\Entity\Player $weBestPlayer
     */
    public function setWeBestPlayer(\FSB\ASTT\CoreBundle\Entity\Player $weBestPlayer)
    {
        $this->weBestPlayer = $weBestPlayer;
    }

    /**
     * Get weBestPlayer
     *
     * @return FSB\ASTT\CoreBundle\Entity\Player 
     */
    public function getWeBestPlayer()
    {
        return $this->weBestPlayer;
    }
    
    /**
     * Get Title
     * 
     * @return type string
     */
    public function __toString()
    {
        return $this->title;
    }
}