<?php

namespace SP\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Donnee
 *
 * @ORM\Table(name="donnee")
 * @ORM\Entity(repositoryClass="SP\BackendBundle\Repository\DonneeRepository")
 */
class Donnee
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomDonnee", type="string", length=255)
     */
    private $nomDonnee;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDonnee", type="datetime")
     */
    private $dateDonnee;

    /**
     * @var int
     *
     * @ORM\Column(name="valeurDonnee", type="integer")
     */
    private $valeurDonnee;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomDonnee
     *
     * @param string $nomDonnee
     *
     * @return Donnee
     */
    public function setNomDonnee($nomDonnee)
    {
        $this->nomDonnee = $nomDonnee;

        return $this;
    }

    /**
     * Get nomDonnee
     *
     * @return string
     */
    public function getNomDonnee()
    {
        return $this->nomDonnee;
    }

    /**
     * Set dateDonnee
     *
     * @param \DateTime $dateDonnee
     *
     * @return Donnee
     */
    public function setDateDonnee($dateDonnee)
    {
        $this->dateDonnee = $dateDonnee;

        return $this;
    }

    /**
     * Get dateDonnee
     *
     * @return \DateTime
     */
    public function getDateDonnee()
    {
        return $this->dateDonnee;
    }

    /**
     * Set valeurDonnee
     *
     * @param integer $valeurDonnee
     *
     * @return Donnee
     */
    public function setValeurDonnee($valeurDonnee)
    {
        $this->valeurDonnee = $valeurDonnee;

        return $this;
    }

    /**
     * Get valeurDonnee
     *
     * @return int
     */
    public function getValeurDonnee()
    {
        return $this->valeurDonnee;
    }
}

