<?php

namespace FSB\ASTT\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FSB\ASTT\CoreBundle\Entity\Team
 */
class Team
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
     * @var integer $number
     */
    private $number;

    /**
     * @var string $civility
     */
    private $civility;

    /**
     * @var string $division
     */
    private $division;

    /**
     * @var integer $nbPlayers
     */
    private $nbPlayers;

    /**
     * @var string $officialLink
     */
    private $officialLink;

    /**
     * @var FSB\ASTT\CoreBundle\Entity\Player
     */
    private $leader;
    
    private static $civilities = array('M' => 'H', 'W' => 'F', 'Y' => 'J');
    
    public function __construct()
    {
        $this->createdAt = new \Datetime('now');
        $this->updatedAt = new \Datetime('now');
        $this->deleted = false;
        $this->nbPlayers = 6;
        $this->officialLink = 'http://fftt.com/sportif/sportif.htm';
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
     * Set number
     *
     * @param integer $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * Get number
     *
     * @return integer 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set civility
     *
     * @param string $civility
     */
    public function setCivility($civility)
    {
        $this->civility = $civility;
    }

    /**
     * Get civility
     *
     * @return string 
     */
    public function getCivility()
    {
        return $this->civility;
    }

    /**
     * Set division
     *
     * @param string $division
     */
    public function setDivision($division)
    {
        $this->division = $division;
    }

    /**
     * Get division
     *
     * @return string 
     */
    public function getDivision()
    {
        return $this->division;
    }

    /**
     * Set nbPlayers
     *
     * @param integer $nbPlayers
     */
    public function setNbPlayers($nbPlayers)
    {
        $this->nbPlayers = $nbPlayers;
    }

    /**
     * Get nbPlayers
     *
     * @return integer 
     */
    public function getNbPlayers()
    {
        return $this->nbPlayers;
    }

    /**
     * Set officialLink
     *
     * @param string $officialLink
     */
    public function setOfficialLink($officialLink)
    {
        $this->officialLink = $officialLink;
    }

    /**
     * Get officialLink
     *
     * @return string 
     */
    public function getOfficialLink()
    {
        return $this->officialLink;
    }

    /**
     * Set leader
     *
     * @param FSB\ASTT\CoreBundle\Entity\Player $leader
     */
    public function setLeader(\FSB\ASTT\CoreBundle\Entity\Player $leader)
    {
        $this->leader = $leader;
    }

    /**
     * Get leader
     *
     * @return FSB\ASTT\CoreBundle\Entity\Player 
     */
    public function getLeader()
    {
        return $this->leader;
    }
    
    public static function getCivilities()
    {
        return self::$civilites;
    }
    
    public function __toString()
    {
        return 'ASTT '.$this->number.' - '.$this->division.self::$civilities[$this->civility];
    }
}