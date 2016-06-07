<?php

/**
 * Created by PhpStorm.
 * User: Eric-PC
 * Date: 26/03/2016
 * Time: 15:49
 */

namespace SitePlaqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\DateTime;
use UserBundle\Entity\Utilisateur;
use SitePlaqueBundle\Entity\Devis;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Plaque
 *
 * @ORM\Table(name="plaque", indexes={@ORM\Index(name="index_devis_id", columns={"devis_id"})}, indexes={@ORM\Index(name="index_utilisateur_id", columns={"utilisateur_id"})})
 * @ORM\Entity(repositoryClass="SitePlaqueBundle\Repository\PlaqueRepository")
 *
 */
class Plaque
{
    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="string")
     */
    private $texte;

    /**
     * @var float
     *
     * @ORM\Column(name="longueur", type="float", nullable=false)
     */
    private $longueur;

    /**
     * @var float
     *
     * @ORM\Column(name="largeur", type="float", nullable=false)
     */
    private $largeur;


    /**
     * @var float
     *
     * @ORM\Column(name="longueur_marquage", type="float", nullable=false)
     */
    private $longueurMarquage;

    /**
     * @var float
     *
     * @ORM\Column(name="largeur_marquage", type="float", nullable=false)
     */
    private $largeurMarquage;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombre_trous", type="integer", nullable=true)
     */
    private $nombreTrous;

    /**
     * @var string
     *
     * @ORM\Column(name="couleur_fond", type="string", nullable=false)
     */
    private $couleurFond;

    /**
     * @var datetime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=true)
     */
    private $dateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="image_produit", type="string", nullable=true)
     */
    private $imageProduit;

    /**
     * @var Utilisateur $utilisateur
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\Utilisateur", inversedBy="plaques", cascade={"persist", "merge"})
     * @ORM\JoinColumn(name="utilisateur_id", referencedColumnName="id",nullable=true)
     *
     */
    private $utilisateur;

    /**
     * @var Devis $devis
     *
     * @ORM\ManyToOne(targetEntity="Devis", inversedBy="plaques", cascade={"persist", "merge"})
     * @ORM\JoinColumn(name="devis_id", referencedColumnName="id",nullable=true)
     *
     */
    protected $devis;

    /**
     * Constructor.
     */
    public function __construct()
    {


    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get nom.
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set nom.
     *
     * @param string $nom
     *
     * @return Plaque
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get texte.
     *
     * @return string
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set texte.
     *
     * @param string $texte
     *
     * @return Plaque
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get longueur.
     *
     * @return float
     */
    public function getLongueur()
    {
        return $this->longueur;
    }

    /**
     * Set longueur.
     *
     * @param float $longueur
     *
     * @return Plaque
     */
    public function setLongueur($longueur)
    {
        $this->longueur = $longueur;

        return $this;
    }

    /**
     * Get largeur.
     *
     * @return float
     */
    public function getLargeur()
    {
        return $this->largeur;
    }

    /**
     * Set largeur.
     *
     * @param float $largeur
     *
     * @return Plaque
     */
    public function setLargeur($largeur)
    {
        $this->largeur = $largeur;

        return $this;
    }

    /**
     * Get largeurMarquage.
     *
     * @return float
     */
    public function getLargeurMarquage()
    {
        return $this->largeurMarquage;
    }

    /**
     * Set largeurMarquage.
     *
     * @param float $largeurMarquage
     *
     * @return Plaque
     */
    public function setLargeurMarquage($largeurMarquage)
    {
        $this->largeurMarquage = $largeurMarquage;

        return $this;
    }

    /**
     * Get longeurMarquage.
     *
     * @return float
     */
    public function getLongueurMarquage()
    {
        return $this->longueurMarquage;
    }

    /**
     * Set longueurMarquage.
     *
     * @param float $longueurMarquage
     *
     * @return Plaque
     */
    public function setLongueurMarquage($longueurMarquage)
    {
        $this->longueurMarquage = $longueurMarquage;

        return $this;
    }


    /**
     * Get nombreTrous.
     *
     * @return integer
     */
    public function getNombreTrous()
    {
        return $this->nombreTrous;
    }

    /**
     * Set nombreTrous.
     *
     * @param integer $nombreTrous
     *
     * @return Plaque
     */
    public function setNombreTrous($nombreTrous)
    {
        $this->nombreTrous = $nombreTrous;

        return $this;
    }

    /**
     * Get couleurFond.
     *
     * @return string
     */
    public function getCouleurFond()
    {
        return $this->couleurFond;
    }

    /**
     * Set couleurFond.
     *
     * @param string $couleurFond
     *
     * @return Plaque
     */
    public function setCouleurFond($couleurFond)
    {
        $this->couleurFond = $couleurFond;

        return $this;
    }

    /**
     * Get dateCreation.
     *
     * @return datetime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set dateCreation.
     *
     * @param datetime $dateCreation
     *
     * @return Plaque
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get imageProduit.
     *
     * @return string
     */
    public function getImageProduit()
    {
        return $this->imageProduit;
    }

    /**
     * Set imageProduit.
     *
     * @param string $imageProduit
     *
     * @return Plaque
     */
    public function setImageProduit($imageProduit)
    {
        $this->imageProduit = $imageProduit;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \UserBundle\Entity\Utilisateur
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * Set utilisateur.
     *
     * @param \UserBundle\Entity\Utilisateur $utilisateur
     *
     * @return Utilisateur
     */
    public function setUtilisateur($utilisateur)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get devis
     *
     * @return \SitePlaqueBundle\Entity\Devis
     */
    public function getDevis()
    {
        return $this->devis;
    }

    /**
     * Set devis
     *
     * @param \SitePlaqueBundle\Entity\Devis $devis
     *
     * @return Devis
     */
    public function setDevis(\SitePlaqueBundle\Entity\Devis $devis)
    {
        $this->devis = $devis;
        return $this;
    }

    /**
     * @ORM\PostUpdate()
     * @return int
     */
    public function calculNbTrou()
    {
        $nbTrous = 4 ;
        $nbLargeur = (($this->getlargeur() *2)-1)*2;
        $nbLongueur = (($this->getLongueur()*2 ) -1)*2 ;

        $this->nombreTrous = $nbTrous + $nbLargeur + $nbLongueur;


        return $this->nombreTrous;
    }


}