<?php
/**
 * Created by PhpStorm.
 * User: Eric-PC
 * Date: 29/03/2016
 * Time: 15:34
 */

namespace SitePlaqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\MappedSuperclass
 *
 */


abstract class Utilisateur
{
    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", nullable=false)
     */
    protected $login;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string", nullable=false)
     */
    protected $mdp;

    /**
     * Get login.
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set login.
     *
     * @param string $login
     *
     * @return Utilisateur
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get mdp.
     *
     * @return string
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set mdp.
     *
     * @param string $mdp
     *
     * @return Utilisateur
     */
    public function setMdp($mdp)
    {
        $this->mdp= $mdp;

        return $this;
    }
}