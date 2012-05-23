<?php

namespace FSB\ASTT\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FSB\ASTT\CoreBundle\Entity\Player
 */
class Player
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
     * @var boolean $hidden
     */
    private $hidden;

    /**
     * @var string $licence
     */
    private $licence;

    /**
     * @var string $firstname
     */
    private $firstname;

    /**
     * @var string $lastname
     */
    private $lastname;

    /**
     * @var datetime $birthday
     */
    private $birthday;

    /**
     * @var string $civility
     */
    private $civility;

    /**
     * @var string $category
     */
    private $category;

    /**
     * @var integer $points
     */
    private $points;

    /**
     * @var string $classement
     */
    private $classement;

    /**
     * @var FSB\ASTT\CoreBundle\Entity\Team
     */
    private $mainTeam;

    /**
     * @var FSB\ASTT\CoreBundle\Entity\Team
     */
    private $secondTeam;

    /**
     * @var FSB\ASTT\CoreBundle\Entity\Team
     */
    private $thirdTeam;
    
    
    public function __construct()
    {
        $this->createdAt = new \Datetime('now');
        $this->updatedAt = new \Datetime('now');
        $this->hidden = false;
        $this->points = 500;
        $this->classement = '5';
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
     * Set hidden
     *
     * @param boolean $hidden
     */
    public function setHidden($hidden)
    {
        $this->hidden = $hidden;
    }

    /**
     * Get hidden
     *
     * @return boolean 
     */
    public function getHidden()
    {
        return $this->hidden;
    }

    /**
     * Set licence
     *
     * @param string $licence
     */
    public function setLicence($licence)
    {
        $this->licence = $licence;
    }

    /**
     * Get licence
     *
     * @return string 
     */
    public function getLicence()
    {
        return $this->licence;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set birthday
     *
     * @param datetime $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * Get birthday
     *
     * @return datetime 
     */
    public function getBirthday()
    {
        return $this->birthday;
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
     * Set category
     *
     * @param string $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * Get category
     *
     * @return string 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set points
     *
     * @param integer $points
     */
    public function setPoints($points)
    {
        $this->points = $points;
    }

    /**
     * Get points
     *
     * @return integer 
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Set classement
     *
     * @param string $classement
     */
    public function setClassement($classement)
    {
        $this->classement = $classement;
    }

    /**
     * Get classement
     *
     * @return string 
     */
    public function getClassement()
    {
        return $this->classement;
    }

    /**
     * Set mainTeam
     *
     * @param FSB\ASTT\CoreBundle\Entity\Team $mainTeam
     */
    public function setMainTeam(\FSB\ASTT\CoreBundle\Entity\Team $mainTeam)
    {
        $this->mainTeam = $mainTeam;
    }

    /**
     * Get mainTeam
     *
     * @return FSB\ASTT\CoreBundle\Entity\Team 
     */
    public function getMainTeam()
    {
        return $this->mainTeam;
    }

    /**
     * Set secondTeam
     *
     * @param FSB\ASTT\CoreBundle\Entity\Team $secondTeam
     */
    public function setSecondTeam(\FSB\ASTT\CoreBundle\Entity\Team $secondTeam)
    {
        $this->secondTeam = $secondTeam;
    }

    /**
     * Get secondTeam
     *
     * @return FSB\ASTT\CoreBundle\Entity\Team 
     */
    public function getSecondTeam()
    {
        return $this->secondTeam;
    }

    /**
     * Set thirdTeam
     *
     * @param FSB\ASTT\CoreBundle\Entity\Team $thirdTeam
     */
    public function setThirdTeam(\FSB\ASTT\CoreBundle\Entity\Team $thirdTeam)
    {
        $this->thirdTeam = $thirdTeam;
    }

    /**
     * Get thirdTeam
     *
     * @return FSB\ASTT\CoreBundle\Entity\Team 
     */
    public function getThirdTeam()
    {
        return $this->thirdTeam;
    }
    /**
     * __toString()
     * 
     * Get Players fullname
     * @return type string
     */
    public function __toString()
    {
        return $this->lastname.' '.$this->firstname;
    }
}