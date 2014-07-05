<?php
namespace Medic\Bundle\PersonnelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Personnel
 * @package Medic\Bundle\PersonnelBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="Personnel",uniqueConstraints={@ORM\UniqueConstraint(name="personnel",columns={"nom","prenom"})})
 */
class Personnel
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string",nullable=false)
     */
    protected $nom;

    /**
     * @ORM\Column(type="string",nullable=false)
     */
    protected $prenom;

    /**
     * @ORM\Column(type="date",nullable=false)
     */
    private $date_naissance;

    /**
     * @ORM\Column(type="integer",nullable=false)
     */
    private $enfant;

    /**
     * @ORM\Column(type="string",nullable=false)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string",nullable=false)
     */
    private $ville;

    /**
     * @ORM\Column(type="integer",nullable=false)
     */
    private $code_postal;

    /**
     * @ORM\Column(type="integer")
     */
    private $tel_fixe;

    /**
     * @ORM\Column(type="integer")
     */
    private $tel_mobile;

    /**
     * @ORM\Column(type="integer")
     */
    private $poste;

    /**
     * @ORM\Column(type="boolean")
     */
    private $fumeur;
}