<?php
/**
 * Created by PhpStorm.
 * User: Eric-PC
 * Date: 26/03/2016
 * Time: 16:48
 */

namespace SitePlaqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use SitePlaqueBundle\Entity\Plaque;
use UserBundle\Entity\Utilisateur;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Devis
 *
 * @ORM\Table(name="devis")
 * @ORM\Entity(repositoryClass="SitePlaqueBundle\Repository\DevisRepository")
 *
 */

class Devis
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
     * @var \Doctrine\Common\Collections\Collection $plaques
     *
     * @ORM\OneToMany(targetEntity="Plaque", mappedBy="devis", cascade={"persist", "merge"})
     *
     */
    private $plaques;

    /**
     * @var Utilisateur $utilisateur
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\Utilisateur", inversedBy="devis", cascade={"persist", "merge"})
     * @ORM\JoinColumn(name="utilisateur_id", referencedColumnName="id", nullable=false)
     *
     */
    private $utilisateur;


    /**
     * @ORM\ManyToMany(targetEntity="PrixUnitaire", cascade={"persist"})
     * @ORM\JoinTable(name="devis_prix_unitaires",
     *      joinColumns={@ORM\JoinColumn(name="devis_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="prix_unitaire_id", referencedColumnName="id")}
     *      )
     */
     private $prixUnitaires;

    /**
     * @var float
     *
     * @ORM\Column(name="total", type="float", nullable=false)
     */
    private $total;

    /**
     * Constructor.
     */
    public function __construct()
    {
        //echo "hello";exit;
        $this->plaques =  new \Doctrine\Common\Collections\ArrayCollection();
        $this->prixUnitaires = new \Doctrine\Common\Collections\ArrayCollection();

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
     * @return Devis
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get total.
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set total.
     *
     * @param float $total
     *
     * @return Devis
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get plaques
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlaques()
    {
        return $this->plaques;
    }

    /**
     * @param Plaque $plaque
     * set plaque
     */
    public function setPlaque($plaque)
    {
        $this->plaques->add($plaque);
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
     * Set Utilisateur
     * @param Utilisateur $utilisateur
     */
    public function setUtilisateur($utilisateur)
    {
        $this->utilisateur = $utilisateur;
    }

    /**
     * get PrixUnitaires
     */
    public function getPrixUnitaires()
    {
        return $this->prixUnitaires;
    }

    /**
     * set PrixUnitaire
     * @param PrixUnitaire $prixUnit
     */

    public function setPrixUnitaires($prixUnit)
    {
        $this->prixUnitaires->add($prixUnit);
    }


    public function calculTotal()
    {

        while(!isset($pUTaille) &&!isset($pUTailleMarq) && !isset($pUnbTrou))
        {
            foreach ($this->prixUnitaires as $prixUnitaire) {
                if ($prixUnitaire->getLibelle() == "Taille_Prix_Unitaire")
                {
                    $pUTaille = $prixUnitaire->getPrix();
                }elseif($prixUnitaire->getLibelle() == "Taille_Marquage_Prix_Unitaire")
                {
                    $pUTailleMarq = $prixUnitaire->getPrix();
                }elseif($prixUnitaire->getLibelle() == "Trou_Prix_Unitaire")
                {
                    $pUnbTrou = $prixUnitaire->getPrix();
                }
            }
        }
        $prixTotal = 0;

        foreach($this->plaques as $plaque)
        {

            $taillePlaque = $plaque->getlargeur() * $plaque->getlongueur();
            $tailleMarq = $plaque->getlargeurMarquage() * $plaque->getlongueurMarquage();


            $prixTotal += $plaque->getnombreTrous() * $pUnbTrou;

            $prixTotal += ($taillePlaque*100) * $pUTaille;
            $prixTotal += ($tailleMarq *100)* $pUTailleMarq;

        }

        return $prixTotal;

    }
}