<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class CoursSupplementaire extends \App\Entity\CoursSupplementaire implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\CoursSupplementaire' . "\0" . 'id', '' . "\0" . 'App\\Entity\\CoursSupplementaire' . "\0" . 'title', '' . "\0" . 'App\\Entity\\CoursSupplementaire' . "\0" . 'coursDate', '' . "\0" . 'App\\Entity\\CoursSupplementaire' . "\0" . 'horaireDebut', '' . "\0" . 'App\\Entity\\CoursSupplementaire' . "\0" . 'horaireFin', '' . "\0" . 'App\\Entity\\CoursSupplementaire' . "\0" . 'niveau'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\CoursSupplementaire' . "\0" . 'id', '' . "\0" . 'App\\Entity\\CoursSupplementaire' . "\0" . 'title', '' . "\0" . 'App\\Entity\\CoursSupplementaire' . "\0" . 'coursDate', '' . "\0" . 'App\\Entity\\CoursSupplementaire' . "\0" . 'horaireDebut', '' . "\0" . 'App\\Entity\\CoursSupplementaire' . "\0" . 'horaireFin', '' . "\0" . 'App\\Entity\\CoursSupplementaire' . "\0" . 'niveau'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (CoursSupplementaire $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle(?string $title): \App\Entity\CoursSupplementaire
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getCoursDate(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCoursDate', []);

        return parent::getCoursDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setCoursDate(\DateTimeInterface $coursDate): \App\Entity\CoursSupplementaire
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCoursDate', [$coursDate]);

        return parent::setCoursDate($coursDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getHoraireDebut(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHoraireDebut', []);

        return parent::getHoraireDebut();
    }

    /**
     * {@inheritDoc}
     */
    public function setHoraireDebut(\DateTimeInterface $horaireDebut): \App\Entity\CoursSupplementaire
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHoraireDebut', [$horaireDebut]);

        return parent::setHoraireDebut($horaireDebut);
    }

    /**
     * {@inheritDoc}
     */
    public function getHoraireFin(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHoraireFin', []);

        return parent::getHoraireFin();
    }

    /**
     * {@inheritDoc}
     */
    public function setHoraireFin(?\DateTimeInterface $horaireFin): \App\Entity\CoursSupplementaire
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHoraireFin', [$horaireFin]);

        return parent::setHoraireFin($horaireFin);
    }

    /**
     * {@inheritDoc}
     */
    public function getNiveau(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNiveau', []);

        return parent::getNiveau();
    }

    /**
     * {@inheritDoc}
     */
    public function addNiveau(\App\Entity\Niveau $niveau): \App\Entity\CoursSupplementaire
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addNiveau', [$niveau]);

        return parent::addNiveau($niveau);
    }

    /**
     * {@inheritDoc}
     */
    public function removeNiveau(\App\Entity\Niveau $niveau): \App\Entity\CoursSupplementaire
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeNiveau', [$niveau]);

        return parent::removeNiveau($niveau);
    }

}
