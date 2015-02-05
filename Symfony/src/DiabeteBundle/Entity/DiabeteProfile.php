<?php

namespace DiabeteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DiabeteProfile
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="DiabeteBundle\Entity\DiabeteProfileRepository")
 */
class DiabeteProfile
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
     * @var float
     *
     * @ORM\Column(name="facteurSensibiliteInsuline", type="float")
     */
    private $facteurSensibiliteInsuline;

    /**
     * @var float
     *
     * @ORM\Column(name="ratioInsulineGlucide", type="float")
     */
    private $ratioInsulineGlucide;

    /**
     * @var float
     *
     * @ORM\Column(name="glycemieCible", type="float")
     */
    private $glycemieCible;


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
     * Set facteurSensibiliteInsuline
     *
     * @param float $facteurSensibiliteInsuline
     * @return DiabeteProfile
     */
    public function setFacteurSensibiliteInsuline($facteurSensibiliteInsuline)
    {
        $this->facteurSensibiliteInsuline = $facteurSensibiliteInsuline;

        return $this;
    }

    /**
     * Get facteurSensibiliteInsuline
     *
     * @return float 
     */
    public function getFacteurSensibiliteInsuline()
    {
        return $this->facteurSensibiliteInsuline;
    }

    /**
     * Set ratioInsulineGlucide
     *
     * @param float $ratioInsulineGlucide
     * @return DiabeteProfile
     */
    public function setRatioInsulineGlucide($ratioInsulineGlucide)
    {
        $this->ratioInsulineGlucide = $ratioInsulineGlucide;

        return $this;
    }

    /**
     * Get ratioInsulineGlucide
     *
     * @return float 
     */
    public function getRatioInsulineGlucide()
    {
        return $this->ratioInsulineGlucide;
    }

    /**
     * Set glycemieCible
     *
     * @param float $glycemieCible
     * @return DiabeteProfile
     */
    public function setGlycemieCible($glycemieCible)
    {
        $this->glycemieCible = $glycemieCible;

        return $this;
    }

    /**
     * Get glycemieCible
     *
     * @return float 
     */
    public function getGlycemieCible()
    {
        return $this->glycemieCible;
    }

    public function __construct()
    {
        $this->facteurSensibiliteInsuline = 3;
        $this->ratioInsulineGlucide = 0.1;
        $this->glycemieCible = 6;
    }
}
