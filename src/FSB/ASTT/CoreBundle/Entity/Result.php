<?php

namespace FSB\ASTT\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FSB\ASTT\CoreBundle\Entity\Result
 */
class Result
{
    public static $ResultsUploadDir = 'files/results';
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
     * @var integer $week
     */
    private $week;

    /**
     * @var datetime $date
     */
    private $date;

    /**
     * @var string $place
     */
    private $place;

    /**
     * @var string $opponent
     */
    private $opponent;

    /**
     * @var integer $teamScore
     */
    private $teamScore;

    /**
     * @var integer $opponentScore
     */
    private $opponentScore;

    /**
     * @var text $description
     */
    private $description;

    /**
     * @var FSB\ASTT\CoreBundle\Entity\Team
     */
    private $team;

    /**
     * @var string $file
     */
    private $file;

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
        $this->teamScore = 10;
        $this->opponentScore = 10;
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
     * Set week
     *
     * @param integer $week
     */
    public function setWeek($week)
    {
        $this->week = $week;
    }

    /**
     * Get week
     *
     * @return integer 
     */
    public function getWeek()
    {
        return $this->week;
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
     * Set opponent
     *
     * @param string $opponent
     */
    public function setOpponent($opponent)
    {
        $this->opponent = $opponent;
    }

    /**
     * Get opponent
     *
     * @return string 
     */
    public function getOpponent()
    {
        return $this->opponent;
    }

    /**
     * Set teamScore
     *
     * @param integer $teamScore
     */
    public function setTeamScore($teamScore)
    {
        $this->teamScore = $teamScore;
    }

    /**
     * Get teamScore
     *
     * @return integer 
     */
    public function getTeamScore()
    {
        return $this->teamScore;
    }

    /**
     * Set opponentScore
     *
     * @param integer $opponentScore
     */
    public function setOpponentScore($opponentScore)
    {
        $this->opponentScore = $opponentScore;
    }

    /**
     * Get opponentScore
     *
     * @return integer 
     */
    public function getOpponentScore()
    {
        return $this->opponentScore;
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
     * Set team
     *
     * @param FSB\ASTT\CoreBundle\Entity\Team $team
     */
    public function setTeam(\FSB\ASTT\CoreBundle\Entity\Team $team)
    {
        $this->team = $team;
    }

    /**
     * Get team
     *
     * @return FSB\ASTT\CoreBundle\Entity\Team 
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * Set file
     *
     * @param string $file
     */
    public function setFile($file)
    {
        $this->file = $file;
    }

    /**
     * Get file
     *
     * @return string 
     */
    public function getFile()
    {
        return $this->file;
    }
    
    /**
     * __toString
     * 
     * @return string 
     */
    public function __toString()
    {
        return 'J'.$this->week.' ['.$this->team.']';
    }
}