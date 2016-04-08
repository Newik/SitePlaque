<?php
/**
 * Created by PhpStorm.
 * User: Eric-PC
 * Date: 26/03/2016
 * Time: 16:48
 */

namespace SitePlaqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


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
     * @ORM\OneToMany(targetEntity="Plaque", mappedBy="devis", cascade={"all"})
     */
    private $plaques;

    /**
     * Constructor.
     */
    public function __construct()
    {
        //echo "hello";exit;

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
     * Get plaques
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlaques()
    {
        return $this->plaques;
    }



}