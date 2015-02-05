<?php

namespace DiabeteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * ServiceDiabetes
 *
 * @ORM\Entity(repositoryClass="DiabeteBundle\Entity\ServiceDiabetesRepository")
 */
class ServiceDiabetes extends ServiceBase
{

	/**
	 * @ORM\OneToOne(targetEntity="Glucometer", mappedBy="serviceDiabetes")
	 */
	private $glucometer;
	
    /**
     * Constructor
     */
    public function __construct()
    {
		parent::__construct();
    }
	
    /**
     * Set glucometer
     *
     * @param \DiabeteBundle\Entity\BlueGlucose $blueGlucose
     * @return ServiceDiabetes
     */
    public function setGlucometer(\DiabeteBundle\Entity\Glucometer $glucometer = null)
    {
        $this->glucometer = $glucometer;
    
        return $this;
    }

    /**
     * Get glucometer
     *
     * @return \DiabeteBundle\Entity\Glucometer 
     */
    public function getGlucometer()
    {
        return $this->glucometer;
    }
	
	public function getName() {
		return 'diabète';
	}
}
