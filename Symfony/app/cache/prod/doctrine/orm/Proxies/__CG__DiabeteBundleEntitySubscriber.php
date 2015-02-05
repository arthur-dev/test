<?php

namespace Proxies\__CG__\DiabeteBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Subscriber extends \DiabeteBundle\Entity\Subscriber implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'DiabeteBundle\\Entity\\Subscriber' . "\0" . 'id', '' . "\0" . 'DiabeteBundle\\Entity\\Subscriber' . "\0" . 'gender', '' . "\0" . 'DiabeteBundle\\Entity\\Subscriber' . "\0" . 'lastname', '' . "\0" . 'DiabeteBundle\\Entity\\Subscriber' . "\0" . 'firstname', '' . "\0" . 'DiabeteBundle\\Entity\\Subscriber' . "\0" . 'address', '' . "\0" . 'DiabeteBundle\\Entity\\Subscriber' . "\0" . 'postalCode', '' . "\0" . 'DiabeteBundle\\Entity\\Subscriber' . "\0" . 'city', '' . "\0" . 'DiabeteBundle\\Entity\\Subscriber' . "\0" . 'phone', '' . "\0" . 'DiabeteBundle\\Entity\\Subscriber' . "\0" . 'cellPhone', '' . "\0" . 'DiabeteBundle\\Entity\\Subscriber' . "\0" . 'birthday', '' . "\0" . 'DiabeteBundle\\Entity\\Subscriber' . "\0" . 'socialSecurityNumber', 'doctor', 'services', '' . "\0" . 'DiabeteBundle\\Entity\\Subscriber' . "\0" . 'diabeteProfile');
        }

        return array('__isInitialized__', '' . "\0" . 'DiabeteBundle\\Entity\\Subscriber' . "\0" . 'id', '' . "\0" . 'DiabeteBundle\\Entity\\Subscriber' . "\0" . 'gender', '' . "\0" . 'DiabeteBundle\\Entity\\Subscriber' . "\0" . 'lastname', '' . "\0" . 'DiabeteBundle\\Entity\\Subscriber' . "\0" . 'firstname', '' . "\0" . 'DiabeteBundle\\Entity\\Subscriber' . "\0" . 'address', '' . "\0" . 'DiabeteBundle\\Entity\\Subscriber' . "\0" . 'postalCode', '' . "\0" . 'DiabeteBundle\\Entity\\Subscriber' . "\0" . 'city', '' . "\0" . 'DiabeteBundle\\Entity\\Subscriber' . "\0" . 'phone', '' . "\0" . 'DiabeteBundle\\Entity\\Subscriber' . "\0" . 'cellPhone', '' . "\0" . 'DiabeteBundle\\Entity\\Subscriber' . "\0" . 'birthday', '' . "\0" . 'DiabeteBundle\\Entity\\Subscriber' . "\0" . 'socialSecurityNumber', 'doctor', 'services', '' . "\0" . 'DiabeteBundle\\Entity\\Subscriber' . "\0" . 'diabeteProfile');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Subscriber $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setDiabeteProfile(\DiabeteBundle\Entity\DiabeteProfile $diabeteProfile = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDiabeteProfile', array($diabeteProfile));

        return parent::setDiabeteProfile($diabeteProfile);
    }

    /**
     * {@inheritDoc}
     */
    public function getDiabeteProfile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDiabeteProfile', array());

        return parent::getDiabeteProfile();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setGender($gender)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGender', array($gender));

        return parent::setGender($gender);
    }

    /**
     * {@inheritDoc}
     */
    public function getGender()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGender', array());

        return parent::getGender();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastname($lastname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastname', array($lastname));

        return parent::setLastname($lastname);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastname', array());

        return parent::getLastname();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstname($firstname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstname', array($firstname));

        return parent::setFirstname($firstname);
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstname', array());

        return parent::getFirstname();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddress($address)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddress', array($address));

        return parent::setAddress($address);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddress', array());

        return parent::getAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setPostalCode($postalCode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPostalCode', array($postalCode));

        return parent::setPostalCode($postalCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getPostalCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPostalCode', array());

        return parent::getPostalCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setCity($city)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCity', array($city));

        return parent::setCity($city);
    }

    /**
     * {@inheritDoc}
     */
    public function getCity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCity', array());

        return parent::getCity();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhone($phone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhone', array($phone));

        return parent::setPhone($phone);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhone', array());

        return parent::getPhone();
    }

    /**
     * {@inheritDoc}
     */
    public function setCellPhone($cellPhone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCellPhone', array($cellPhone));

        return parent::setCellPhone($cellPhone);
    }

    /**
     * {@inheritDoc}
     */
    public function getCellPhone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCellPhone', array());

        return parent::getCellPhone();
    }

    /**
     * {@inheritDoc}
     */
    public function setBirthday($birthday)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBirthday', array($birthday));

        return parent::setBirthday($birthday);
    }

    /**
     * {@inheritDoc}
     */
    public function getBirthday()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBirthday', array());

        return parent::getBirthday();
    }

    /**
     * {@inheritDoc}
     */
    public function setSocialSecurityNumber($socialSecurityNumber)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSocialSecurityNumber', array($socialSecurityNumber));

        return parent::setSocialSecurityNumber($socialSecurityNumber);
    }

    /**
     * {@inheritDoc}
     */
    public function getSocialSecurityNumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSocialSecurityNumber', array());

        return parent::getSocialSecurityNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setDoctor(\DiabeteBundle\Entity\Doctor $doctor = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDoctor', array($doctor));

        return parent::setDoctor($doctor);
    }

    /**
     * {@inheritDoc}
     */
    public function getDoctor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDoctor', array());

        return parent::getDoctor();
    }

    /**
     * {@inheritDoc}
     */
    public function addService(\DiabeteBundle\Entity\ServiceBase $services)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addService', array($services));

        return parent::addService($services);
    }

    /**
     * {@inheritDoc}
     */
    public function removeService(\DiabeteBundle\Entity\ServiceBase $services)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeService', array($services));

        return parent::removeService($services);
    }

    /**
     * {@inheritDoc}
     */
    public function getServices()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getServices', array());

        return parent::getServices();
    }

    /**
     * {@inheritDoc}
     */
    public function getAge()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAge', array());

        return parent::getAge();
    }

}
