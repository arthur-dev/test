<?php

namespace DiabeteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mesureactivite
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="DiabeteBundle\Entity\MesureactiviteRepository")
 */
class Mesureactivite
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
     * @var integer
     *
     * @ORM\Column(name="type_activite", type="integer")
     */
    private $typeActivite;

    /**
     * @var float
     *
     * @ORM\Column(name="duree_activite", type="float")
     */
    private $dureeActivite;

    /**
     * @var String
     *
     * @ORM\Column(name="date_debut", type="datetime")
     */
    private $dateDebut;


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
     * Set typeActivite
     *
     * @param integer $typeActivite
     * @return mesure_activite
     */
    public function setTypeActivite($typeActivite)
    {
        $this->typeActivite = $typeActivite;

        return $this;
    }

    /**
     * Get typeActivite
     *
     * @return integer 
     */
    public function getTypeActivite()
    {
        return $this->typeActivite;
    }

    /**
     * Set dureeActivite
     *
     * @param float $dureeActivite
     * @return mesure_activite
     */
    public function setDureeActivite($dureeActivite)
    {
        $this->dureeActivite = $dureeActivite;

        return $this;
    }

    /**
     * Get dureeActivite
     *
     * @return float 
     */
    public function getDureeActivite()
    {
        return $this->dureeActivite;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     * @return mesure_activite
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return String
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }
}
