<?php

namespace DiabeteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mesure_gluco
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="DiabeteBundle\Entity\MesureglucoRepository")
 */
class Mesuregluco
{

    /**
     * @ORM\Id @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @var integer
     *
     *
     * @ORM\Column(name="id_abonne", type="integer")
     *
     *
     */
    private $idAbonne;

    /**
     * @var Datetime
     *
     * @ORM\Column(name="date_mesure", type="datetime")
     *
     *
     */
    private $date;

    /**
     * @var float
     *
     * @ORM\Column(name="valeur", type="float")
     */
    private $valeur;

    /**
     * @var float
     *
     * @ORM\Column(name="temperature", type="float")
     */
    private $temperature;

    /**
     * @var int
     *
     * @ORM\Column(name="raison", type="integer")
     */
    private $raison;

    /**
     * Set raison
     *
     * @param integer $raison
     * @return mesure_gluco
     */
    public function setRaison($raison)
    {
        $this->raison = $raison;

        return $this;
    }

    /**
     * Get raison
     *
     * @return integer
     */
    public function getRaison()
    {
        return $this->raison;
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
     * Set date
     *
     * @param \DateTime $date
     * @return mesure_gluco
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return String
     */
    public function getDate()
    {
       return $this->date;
        //return $this->date->format('Y-m-d H:i:s');

    }

    /**
     * Set valeur
     *
     * @param integer $valeur
     * @return mesure_gluco
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Get valeur
     *
     * @return integer 
     */
    public function getValeur()
    {
        return $this->valeur;
    }

    /**
     * Set temperature
     *
     * @param float $temperature
     * @return mesure_gluco
     */
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;

        return $this;
    }

    /**
     * Get temperature
     *
     * @return float 
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * Set idAbonne
     *
     * @param integer $idAbonne
     * @return mesure_gluco
     */
    public function setIdAbonne($idAbonne)
    {
        $this->idAbonne = $idAbonne;

        return $this;
    }

    /**
     * Get idAbonne
     *
     * @return integer 
     */
    public function getIdAbonne()
    {
        return $this->idAbonne;
    }


}
