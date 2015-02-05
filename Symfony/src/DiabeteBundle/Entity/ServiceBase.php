<?php

namespace DiabeteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"ServiceDiabetes" = "ServiceDiabetes"})
 */
class ServiceBase
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    protected $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="closedAt", type="datetime", nullable=true)
     */
    protected $closedAt;
	
	/**
     * @var \DateTime
     *
     * @ORM\Column(name="isActive", type="boolean")
     */
    protected $isActive;
	
	/**
	 * @ORM\ManyToOne(targetEntity="Subscriber", inversedBy="services")
	 * @ORM\JoinColumn(name="id_subscriber", referencedColumnName="id")
	 */
	protected $subscriber;
	
	
    public function __construct() {
        $this->createdAt = new \DateTime('now');
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
     * @param \DateTime $createdAt
     * @return ServiceBase
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    
        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set closedAt
     *
     * @param \DateTime $closedAt
     * @return ServiceBase
     */
    public function setClosedAt($closedAt)
    {
        $this->closedAt = $closedAt;
    
        return $this;
    }

    /**
     * Get closedAt
     *
     * @return \DateTime 
     */
    public function getClosedAt()
    {
        return $this->closedAt;
    }

    

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return ServiceBase
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    
        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    

    /**
     * Set subscriber
     *
     * @param \DiabeteBundle\Entity\Subscriber $subscriber
     * @return ServiceBase
     */
    public function setSubscriber(\DiabeteBundle\Entity\Subscriber $subscriber = null)
    {
        $this->subscriber = $subscriber;
    
        return $this;
    }

    /**
     * Get subscriber
     *
     * @return \DiabeteBundle\Entity\Subscriber 
     */
    public function getSubscriber()
    {
        return $this->subscriber;
    }
}
