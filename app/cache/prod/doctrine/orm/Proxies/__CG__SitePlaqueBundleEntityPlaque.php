<?php

namespace Proxies\__CG__\SitePlaqueBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Plaque extends \SitePlaqueBundle\Entity\Plaque implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'SitePlaqueBundle\\Entity\\Plaque' . "\0" . 'id', '' . "\0" . 'SitePlaqueBundle\\Entity\\Plaque' . "\0" . 'nom', '' . "\0" . 'SitePlaqueBundle\\Entity\\Plaque' . "\0" . 'texte', '' . "\0" . 'SitePlaqueBundle\\Entity\\Plaque' . "\0" . 'longueur', '' . "\0" . 'SitePlaqueBundle\\Entity\\Plaque' . "\0" . 'largeur', '' . "\0" . 'SitePlaqueBundle\\Entity\\Plaque' . "\0" . 'longueurMarquage', '' . "\0" . 'SitePlaqueBundle\\Entity\\Plaque' . "\0" . 'largeurMarquage', '' . "\0" . 'SitePlaqueBundle\\Entity\\Plaque' . "\0" . 'nombreTrous', '' . "\0" . 'SitePlaqueBundle\\Entity\\Plaque' . "\0" . 'couleurFond', '' . "\0" . 'SitePlaqueBundle\\Entity\\Plaque' . "\0" . 'dateCreation', '' . "\0" . 'SitePlaqueBundle\\Entity\\Plaque' . "\0" . 'imageProduit', '' . "\0" . 'SitePlaqueBundle\\Entity\\Plaque' . "\0" . 'utilisateur', 'devis');
        }

        return array('__isInitialized__', '' . "\0" . 'SitePlaqueBundle\\Entity\\Plaque' . "\0" . 'id', '' . "\0" . 'SitePlaqueBundle\\Entity\\Plaque' . "\0" . 'nom', '' . "\0" . 'SitePlaqueBundle\\Entity\\Plaque' . "\0" . 'texte', '' . "\0" . 'SitePlaqueBundle\\Entity\\Plaque' . "\0" . 'longueur', '' . "\0" . 'SitePlaqueBundle\\Entity\\Plaque' . "\0" . 'largeur', '' . "\0" . 'SitePlaqueBundle\\Entity\\Plaque' . "\0" . 'longueurMarquage', '' . "\0" . 'SitePlaqueBundle\\Entity\\Plaque' . "\0" . 'largeurMarquage', '' . "\0" . 'SitePlaqueBundle\\Entity\\Plaque' . "\0" . 'nombreTrous', '' . "\0" . 'SitePlaqueBundle\\Entity\\Plaque' . "\0" . 'couleurFond', '' . "\0" . 'SitePlaqueBundle\\Entity\\Plaque' . "\0" . 'dateCreation', '' . "\0" . 'SitePlaqueBundle\\Entity\\Plaque' . "\0" . 'imageProduit', '' . "\0" . 'SitePlaqueBundle\\Entity\\Plaque' . "\0" . 'utilisateur', 'devis');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Plaque $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', array());

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', array($nom));

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getTexte()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTexte', array());

        return parent::getTexte();
    }

    /**
     * {@inheritDoc}
     */
    public function setTexte($texte)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTexte', array($texte));

        return parent::setTexte($texte);
    }

    /**
     * {@inheritDoc}
     */
    public function getLongueur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLongueur', array());

        return parent::getLongueur();
    }

    /**
     * {@inheritDoc}
     */
    public function setLongueur($longueur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLongueur', array($longueur));

        return parent::setLongueur($longueur);
    }

    /**
     * {@inheritDoc}
     */
    public function getLargeur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLargeur', array());

        return parent::getLargeur();
    }

    /**
     * {@inheritDoc}
     */
    public function setLargeur($largeur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLargeur', array($largeur));

        return parent::setLargeur($largeur);
    }

    /**
     * {@inheritDoc}
     */
    public function getLargeurMarquage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLargeurMarquage', array());

        return parent::getLargeurMarquage();
    }

    /**
     * {@inheritDoc}
     */
    public function setLargeurMarquage($largeurMarquage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLargeurMarquage', array($largeurMarquage));

        return parent::setLargeurMarquage($largeurMarquage);
    }

    /**
     * {@inheritDoc}
     */
    public function getLongueurMarquage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLongueurMarquage', array());

        return parent::getLongueurMarquage();
    }

    /**
     * {@inheritDoc}
     */
    public function setLongueurMarquage($longueurMarquage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLongueurMarquage', array($longueurMarquage));

        return parent::setLongueurMarquage($longueurMarquage);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombreTrous()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombreTrous', array());

        return parent::getNombreTrous();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombreTrous($nombreTrous)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombreTrous', array($nombreTrous));

        return parent::setNombreTrous($nombreTrous);
    }

    /**
     * {@inheritDoc}
     */
    public function getCouleurFond()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCouleurFond', array());

        return parent::getCouleurFond();
    }

    /**
     * {@inheritDoc}
     */
    public function setCouleurFond($couleurFond)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCouleurFond', array($couleurFond));

        return parent::setCouleurFond($couleurFond);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateCreation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateCreation', array());

        return parent::getDateCreation();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateCreation($dateCreation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateCreation', array($dateCreation));

        return parent::setDateCreation($dateCreation);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageProduit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageProduit', array());

        return parent::getImageProduit();
    }

    /**
     * {@inheritDoc}
     */
    public function setImageProduit($imageProduit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageProduit', array($imageProduit));

        return parent::setImageProduit($imageProduit);
    }

    /**
     * {@inheritDoc}
     */
    public function getUtilisateur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUtilisateur', array());

        return parent::getUtilisateur();
    }

    /**
     * {@inheritDoc}
     */
    public function setUtilisateur($utilisateur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUtilisateur', array($utilisateur));

        return parent::setUtilisateur($utilisateur);
    }

    /**
     * {@inheritDoc}
     */
    public function getDevis()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDevis', array());

        return parent::getDevis();
    }

    /**
     * {@inheritDoc}
     */
    public function setDevis(\SitePlaqueBundle\Entity\Devis $devis)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDevis', array($devis));

        return parent::setDevis($devis);
    }

    /**
     * {@inheritDoc}
     */
    public function calculNbTrou()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'calculNbTrou', array());

        return parent::calculNbTrou();
    }

}
