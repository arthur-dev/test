<?php

namespace DiabeteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Glucometer
 *
 * @ORM\Entity(repositoryClass="DiabeteBundle\Entity\GlucometerRepository")
 * @UniqueEntity(fields = "dsn", message = "Le glucomètre est déjà présent")
 */
class Glucometer
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
     * @var string
	 * 
     * @Assert\NotBlank()
     * @ORM\Column(name="dsn", type="string", length=255, nullable=false, unique = true)
     */
    private $dsn;

	/**
	 * @ORM\OneToOne(targetEntity="ServiceDiabetes", inversedBy="glucometer")
	 * @ORM\JoinColumn(name="id_serviceDiabetes", referencedColumnName="id")
	 */
	protected $serviceDiabetes;
	
	/**
	 * @ORM\Column(name="createdAt", type="datetime")
	 */
	protected $createdAt;
	
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
     * Set dsn
     *
     * @param string $dsn
     * @return Glucometer
     */
    public function setDsn($dsn)
    {
        $this->dsn = $dsn;
    
        return $this;
    }

    /**
     * Get dsn
     *
     * @return string 
     */
    public function getDsn()
    {
        return $this->dsn;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Glucometer
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
     * Set serviceDiabetes
     *
     * @param \DiabeteBundle\Entity\ServiceDiabetes $serviceDiabetes
     * @return Glucometer
     */
    public function setServiceDiabetes(\DiabeteBundle\Entity\ServiceDiabetes $serviceDiabetes = null)
    {
        $this->serviceDiabetes = $serviceDiabetes;
    
        return $this;
    }

    /**
     * Get serviceDiabetes
     *
     * @return \DiabeteBundle\Entity\ServiceDiabetes
     */
    public function getServiceDiabetes()
    {
        return $this->serviceDiabetes;
    }
}
