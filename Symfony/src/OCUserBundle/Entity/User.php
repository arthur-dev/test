<?php

namespace OCUserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OCUserBundle\Entity\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="situation", type="smallint", options={"default" = 0})
     */
    private $situation;

    /**
     * Set situation
     */
    public function setSituation($situation)
    {
        $this->situation = $situation;
    
        return $this;
    }

    /**
     * Get situation
     */
    public function getSituation()
    {
        return $this->situation;
    }

    /**
   * @ORM\OneToOne(targetEntity="DiabeteBundle\Entity\Subscriber", cascade={"persist"})
   */
  private $subscriber;

   /**
   * @ORM\OneToOne(targetEntity="DiabeteBundle\Entity\Doctor", cascade={"persist"})
   */
  private $doctor;


    /**
     * Set subscriber
     *
     * @param \DiabeteBundle\Entity\Subscriber $subscriber
     * @return Subscriber
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

  /**
     * Set doctor
     *
     * @param \DiabeteBundle\Entity\Doctor $doctor
     * @return User
     */
    public function setDoctor(\DiabeteBundle\Entity\Doctor $doctor = null)
    {
        $this->doctor = $doctor;
    
        return $this;
    }

    /**
     * Get doctor
     *
     * @return \DiabeteBundle\Entity\Doctor 
     */
    public function getDoctor()
    {
        return $this->doctor;
    }
}
