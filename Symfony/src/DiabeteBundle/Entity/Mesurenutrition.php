<?php

namespace DiabeteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mesurenutrition
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="DiabeteBundle\Entity\MesurenutritionRepository")
 */
class Mesurenutrition
{


    /**
     * @ORM\Id @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Subscriber", cascade={"persist"})
     * @ORM\JoinColumn(name="id_abonne", referencedColumnName="id")
     */
    private $idAbonne;

    /**
     * @var float
     *
     * @ORM\Column(name="calorie", type="float")
     */
    private $calorie;

    /**
     * @var float
     *
     * @ORM\Column(name="sucre", type="float")
     */
    private $sucre;

    /**
     * @var Datetime
     *
     * @ORM\Column(name="heure", type="datetime")
     */
    private $heure;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    
    public function setIdAbonne($idAbonne)
    {
        $this->idAbonne = $idAbonne;

        return $this;
    }

    
    public function getIdAbonne()
    {
        return $this->idAbonne;
    }

    /**
     * Set calorie
     *
     * @param float $calorie
     * @return mesure_nutrition
     */
    public function setCalorie($calorie)
    {
        $this->calorie = $calorie;

        return $this;
    }

    /**
     * Get calorie
     *
     * @return float 
     */
    public function getCalorie()
    {
        return $this->calorie;
    }

    /**
     * Set sucre
     *
     * @param float $sucre
     * @return mesure_nutrition
     */
    public function setSucre($sucre)
    {
        $this->sucre = $sucre;

        return $this;
    }

    /**
     * Get sucre
     *
     * @return float 
     */
    public function getSucre()
    {
        return $this->sucre;
    }

    /**
     * Set heure
     *
     * @param \DateTime $heure
     * @return mesure_nutrition
     */
    public function setHeure($heure)
    {
        $this->heure = $heure;

        return $this;
    }

    /**
     * Get heure
     *
     * @return String
     */
    public function getHeure()
    {
        return $this->heure;
    }
}
