<?php

namespace DiabeteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subscriber
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="DiabeteBundle\Entity\SubscriberRepository")
 */
class Subscriber
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
     * @var boolean
     *
     * @ORM\Column(name="gender", type="boolean")
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="postalCode", type="string", length=255)
     */
    private $postalCode;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="cellPhone", type="string", length=255)
     */
    private $cellPhone;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthday", type="date")
     */
    private $birthday;

    /**
     * @var string
     *
     * @ORM\Column(name="socialSecurityNumber", type="string", length=255)
     */
    private $socialSecurityNumber;

    /**
     * @ORM\ManyToOne(targetEntity="DiabeteBundle\Entity\Doctor", inversedBy="subscribers")
     * @ORM\JoinColumn(name="id_doctor", referencedColumnName="id")
     */
    protected $doctor;

    /**
     * @ORM\OneToMany(targetEntity="ServiceBase", mappedBy="subscriber", cascade={"remove", "persist"})
     */
    protected $services;

    /**
   * @ORM\OneToOne(targetEntity="DiabeteBundle\Entity\DiabeteProfile", cascade={"persist"})
   */
  private $diabeteProfile;

  /**
     * Set diabeteProfile
     *
     * @param \DiabeteBundle\Entity\DiabeteProfile $diabeteProfile
     * @return DiabeteProfile
     */
    public function setDiabeteProfile(\DiabeteBundle\Entity\DiabeteProfile $diabeteProfile = null)
    {
        $this->diabeteProfile = $diabeteProfile;
    
        return $this;
    }

    /**
     * Get diabeteProfile
     *
     * @return \DiabeteBundle\Entity\DiabeteProfile 
     */
    public function getDiabeteProfile()
    {
        return $this->diabeteProfile;
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
     * Set gender
     *
     * @param boolean $gender
     * @return Subscriber
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return boolean 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return Subscriber
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
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
     * Set firstname
     *
     * @param string $firstname
     * @return Subscriber
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
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
     * Set address
     *
     * @param string $address
     * @return Subscriber
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set postalCode
     *
     * @param string $postalCode
     * @return Subscriber
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get postalCode
     *
     * @return string 
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Subscriber
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Subscriber
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set cellPhone
     *
     * @param string $cellPhone
     * @return Subscriber
     */
    public function setCellPhone($cellPhone)
    {
        $this->cellPhone = $cellPhone;

        return $this;
    }

    /**
     * Get cellPhone
     *
     * @return string 
     */
    public function getCellPhone()
    {
        return $this->cellPhone;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     * @return Subscriber
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime 
     */
    public function getBirthday()
    {
        return $this->birthday;
    }


    /**
     * Set socialSecurityNumber
     *
     * @param string $socialSecurityNumber
     * @return Subscriber
     */
    public function setSocialSecurityNumber($socialSecurityNumber)
    {
        $this->socialSecurityNumber = $socialSecurityNumber;

        return $this;
    }

    /**
     * Get socialSecurityNumber
     *
     * @return string 
     */
    public function getSocialSecurityNumber()
    {
        return $this->socialSecurityNumber;
    }

    /**
     * Set doctor
     *
     * @param \DiabeteBundle\Entity\Doctor $doctor
     * @return Subscriber
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

    /**
     * Add services
     *
     * @param \DiabeteBundle\Entity\ServiceBase $services
     * @return Subscriber
     */
    public function addService(\DiabeteBundle\Entity\ServiceBase $services)
    {
        $this->services[] = $services;
    
        return $this;
    }

    /**
     * Remove services
     *
     * @param \DiabeteBundle\Entity\ServiceBase $services
     */
    public function removeService(\DiabeteBundle\Entity\ServiceBase $services)
    {
        $this->services->removeElement($services);
    }

    /**
     * Get services
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getServices()
    {
        return $this->services;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->services = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getAge() {
        $now = new \DateTime();
        $interval = $now->diff($this->getBirthday());
        return $interval->y;
    }

}
