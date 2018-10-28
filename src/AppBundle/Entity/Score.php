<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Score
 *
 * @ORM\Table(name="score")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ScoreRepository")
 */
class Score
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
     * @var \DateTime
     *
     * @ORM\Column(name="scoreDate", type="datetime")
     */
    private $scoreDate;

    /**
     * @var bool
     *
     * @ORM\Column(name="isPresent", type="boolean")
     */
    private $isPresent = false;


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
     * Set scoreDate
     *
     * @param \DateTime $scoreDate
     *
     * @return Score
     */
    public function setScoreDate($scoreDate)
    {
        $this->scoreDate = $scoreDate;

        return $this;
    }

    /**
     * Get scoreDate
     *
     * @return \DateTime
     */
    public function getScoreDate()
    {
        return $this->scoreDate;
    }

    /**
     * Set isPresent
     *
     * @param boolean $isPresent
     *
     * @return Score
     */
    public function setIsPresent($isPresent)
    {
        $this->isPresent = $isPresent;

        return $this;
    }

    /**
     * Get isPresent
     *
     * @return bool
     */
    public function getIsPresent()
    {
        return $this->isPresent;
    }
}
