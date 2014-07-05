<?php

namespace Medic\Bundle\PersonnelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Contrat
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Contrat
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $nom_contrat;

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
     * Set nom_contrat
     *
     * @param string $nomContrat
     * @return Contrat
     */
    public function setNomContrat($nomContrat)
    {
        $this->nom_contrat = $nomContrat;

        return $this;
    }

    /**
     * Get nom_contrat
     *
     * @return string 
     */
    public function getNomContrat()
    {
        return $this->nom_contrat;
    }
}
