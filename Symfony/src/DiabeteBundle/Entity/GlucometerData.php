<?php

namespace DiabeteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlucometerData
 *
 * @ORM\Entity(repositoryClass="DiabeteBundle\Entity\GlucometerDataRepository")
 */
class GlucometerData
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
     * @var float
     *
     * @ORM\Column(name="glucose", type="integer")
     */
    private $glucose;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
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

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return GlucometerData
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
     * Set glucose
     *
     * @param integer $glucose
     * @return GlucometerData
     */
    public function setGlucose($glucose)
    {
        $this->glucose = $glucose;
    
        return $this;
    }

    /**
     * Get glucose
     *
     * @return integer 
     */
    public function getGlucose()
    {
        return $this->glucose;
    }
}
