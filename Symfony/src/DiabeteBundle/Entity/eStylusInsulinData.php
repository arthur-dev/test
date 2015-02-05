<?php

namespace DiabeteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * eStylusInsulinData
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="DiabeteBundle\Entity\eStylusInsulinDataRepository")
 */
class eStylusInsulinData
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Subscriber", cascade={"persist"})
     * @ORM\JoinColumn(name="id_subscriber", referencedColumnName="id")
     */
    private $subscriber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="insulin", type="integer")
     */
    private $insulin;

    /**
     * @var float
     *
     * @ORM\Column(name="dosage", type="float")
     */
    private $dosage;


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
     * Set date
     *
     * @param \DateTime $date
     * @return eStylusInsulinData
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set insulin
     *
     * @param integer $insulin
     * @return eStylusInsulinData
     */
    public function setInsulin($insulin)
    {
        $this->insulin = $insulin;

        return $this;
    }

    /**
     * Get insulin
     *
     * @return integer 
     */
    public function getInsulin()
    {
        return $this->insulin;
    }

    /**
     * Set dosage
     *
     * @param float $dosage
     * @return eStylusInsulinData
     */
    public function setDosage($dosage)
    {
        $this->dosage = $dosage;

        return $this;
    }

    /**
     * Get dosage
     *
     * @return float 
     */
    public function getDosage()
    {
        return $this->dosage;
    }

    public function setSubscriber($subscriber)
    {
        $this->subscriber = $subscriber;
    
        return $this;
    }

    /**
     * Get subscriber
     */
    public function getSubscriber()
    {
        return $this->subscriber;
    }
}
