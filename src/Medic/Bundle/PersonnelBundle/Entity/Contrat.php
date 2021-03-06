<?php

namespace Medic\Bundle\PersonnelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Contrat
 *
 * @ORM\Table(uniqueConstraints={@ORM\UniqueConstraint(name="nom_contrat",columns={"nom_contrat"})})
 * @ORM\HasLifecycleCallbacks
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
     * @ORM\Column(type="string",nullable=false)
     */
    private $nom_contrat;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;

    /** @ORM\PrePersist */
    public function CreatedOnPrePersist()
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
    }

    /** @ORM\PreUpdate */
    public function UpdatedOnPreUpdate()
    {
        $this->updatedAt = new \DateTime();
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

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Contrat
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updateddAt
     *
     * @param \DateTime $updateddAt
     * @return Contrat
     */
    public function setUpdateddAt($updateddAt)
    {
        $this->updateddAt = $updateddAt;

        return $this;
    }

    /**
     * Get updateddAt
     *
     * @return \DateTime 
     */
    public function getUpdateddAt()
    {
        return $this->updateddAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Contrat
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}
