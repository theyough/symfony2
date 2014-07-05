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
     * Set nom
     *
     * @param string $nom
     * @return Personnel
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Personnel
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set date_naissance
     *
     * @param \DateTime $dateNaissance
     * @return Personnel
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->date_naissance = $dateNaissance;

        return $this;
    }

    /**
     * Get date_naissance
     *
     * @return \DateTime 
     */
    public function getDateNaissance()
    {
        return $this->date_naissance;
    }

    /**
     * Set enfant
     *
     * @param integer $enfant
     * @return Personnel
     */
    public function setEnfant($enfant)
    {
        $this->enfant = $enfant;

        return $this;
    }

    /**
     * Get enfant
     *
     * @return integer 
     */
    public function getEnfant()
    {
        return $this->enfant;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Personnel
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Personnel
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set code_postal
     *
     * @param integer $codePostal
     * @return Personnel
     */
    public function setCodePostal($codePostal)
    {
        $this->code_postal = $codePostal;

        return $this;
    }

    /**
     * Get code_postal
     *
     * @return integer 
     */
    public function getCodePostal()
    {
        return $this->code_postal;
    }

    /**
     * Set tel_fixe
     *
     * @param integer $telFixe
     * @return Personnel
     */
    public function setTelFixe($telFixe)
    {
        $this->tel_fixe = $telFixe;

        return $this;
    }

    /**
     * Get tel_fixe
     *
     * @return integer 
     */
    public function getTelFixe()
    {
        return $this->tel_fixe;
    }

    /**
     * Set tel_mobile
     *
     * @param integer $telMobile
     * @return Personnel
     */
    public function setTelMobile($telMobile)
    {
        $this->tel_mobile = $telMobile;

        return $this;
    }

    /**
     * Get tel_mobile
     *
     * @return integer 
     */
    public function getTelMobile()
    {
        return $this->tel_mobile;
    }

    /**
     * Set poste
     *
     * @param integer $poste
     * @return Personnel
     */
    public function setPoste($poste)
    {
        $this->poste = $poste;

        return $this;
    }

    /**
     * Get poste
     *
     * @return integer 
     */
    public function getPoste()
    {
        return $this->poste;
    }

    /**
     * Set fumeur
     *
     * @param boolean $fumeur
     * @return Personnel
     */
    public function setFumeur($fumeur)
    {
        $this->fumeur = $fumeur;

        return $this;
    }

    /**
     * Get fumeur
     *
     * @return boolean 
     */
    public function getFumeur()
    {
        return $this->fumeur;
    }
}
