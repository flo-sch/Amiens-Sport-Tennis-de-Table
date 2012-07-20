<?php

namespace FSB\ASTT\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FSB\ASTT\CoreBundle\Entity\Tournament
 */
class Summary
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
     * @var string $tournament
     */
    private $tournament;

    /**
     * @var string $type
     */
    private $type;

    /**
     * @var datetime $date
     */
    private $date;

    /**
     * @var text $description
     */
    private $description;

    /**
     * @var FSB\ASTT\CoreBundle\Entity\Event
     */
    private $event;
    
    /**
     * @var array $tournaments 
     */
    private static $tournaments = array('Cr' => 'Critérium Fédéral', 'Ch' => 'Championnats', 'Fi' => 'Finales par classement', 'To' => 'Tops', 'BJ' => 'Challenge Bernard Jeu', 'CS' => 'Coupe de la somme', 'In' => 'Interclubs');
    /**
     * @var array $types 
     */
    private static $types = array('I' => 'Individuelle', 'T' => 'Par équipe');

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
     * Set tournament
     *
     * @param string $tournament
     */
    public function setTournament($tournament)
    {
        $this->tournament = $tournament;
    }

    /**
     * Get tournament
     *
     * @return string 
     */
    public function getTournament()
    {
        return $this->tournament;
    }

    /**
     * Set type
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
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
     * get tournaments
     * 
     * @return array
     */
    public function getTournaments()
    {
        return self::$tournaments;
    }
    
    /**
     * get types
     * 
     * @return array
     */
    public function getTypes()
    {
        return self::types;
    }
    
    /**
     * Set event
     *
     * @param FSB\ASTT\CoreBundle\Entity\Event $event
     */
    public function setEvent(\FSB\ASTT\CoreBundle\Entity\Event $event)
    {
        $this->event = $event;
    }

    /**
     * Get event
     *
     * @return FSB\ASTT\CoreBundle\Entity\Event 
     */
    public function getEvent()
    {
        return $this->event;
    }
    
    /**
     * __toString
     * 
     * @return string 
     */
    public function __toString()
    {
        return 'Résumé de '.$this->event;
    }
}