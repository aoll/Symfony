<?php

namespace Proxies\__CG__\Fr\ForumBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Commentaire extends \Fr\ForumBundle\Entity\Commentaire implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Fr\\ForumBundle\\Entity\\Commentaire' . "\0" . 'id', '' . "\0" . 'Fr\\ForumBundle\\Entity\\Commentaire' . "\0" . 'author', '' . "\0" . 'Fr\\ForumBundle\\Entity\\Commentaire' . "\0" . 'title', '' . "\0" . 'Fr\\ForumBundle\\Entity\\Commentaire' . "\0" . 'content', '' . "\0" . 'Fr\\ForumBundle\\Entity\\Commentaire' . "\0" . 'date', '' . "\0" . 'Fr\\ForumBundle\\Entity\\Commentaire' . "\0" . 'idCategorie', '' . "\0" . 'Fr\\ForumBundle\\Entity\\Commentaire' . "\0" . 'idSousCategorie', '' . "\0" . 'Fr\\ForumBundle\\Entity\\Commentaire' . "\0" . 'idThreads', '' . "\0" . 'Fr\\ForumBundle\\Entity\\Commentaire' . "\0" . 'idAnswer');
        }

        return array('__isInitialized__', '' . "\0" . 'Fr\\ForumBundle\\Entity\\Commentaire' . "\0" . 'id', '' . "\0" . 'Fr\\ForumBundle\\Entity\\Commentaire' . "\0" . 'author', '' . "\0" . 'Fr\\ForumBundle\\Entity\\Commentaire' . "\0" . 'title', '' . "\0" . 'Fr\\ForumBundle\\Entity\\Commentaire' . "\0" . 'content', '' . "\0" . 'Fr\\ForumBundle\\Entity\\Commentaire' . "\0" . 'date', '' . "\0" . 'Fr\\ForumBundle\\Entity\\Commentaire' . "\0" . 'idCategorie', '' . "\0" . 'Fr\\ForumBundle\\Entity\\Commentaire' . "\0" . 'idSousCategorie', '' . "\0" . 'Fr\\ForumBundle\\Entity\\Commentaire' . "\0" . 'idThreads', '' . "\0" . 'Fr\\ForumBundle\\Entity\\Commentaire' . "\0" . 'idAnswer');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Commentaire $proxy) {
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
    public function setAuthor($author)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAuthor', array($author));

        return parent::setAuthor($author);
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthor', array());

        return parent::getAuthor();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', array($title));

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', array());

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setContent($content)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContent', array($content));

        return parent::setContent($content);
    }

    /**
     * {@inheritDoc}
     */
    public function getContent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContent', array());

        return parent::getContent();
    }

    /**
     * {@inheritDoc}
     */
    public function setDate($date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDate', array($date));

        return parent::setDate($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDate', array());

        return parent::getDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdCategorie($idCategorie)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdCategorie', array($idCategorie));

        return parent::setIdCategorie($idCategorie);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdCategorie()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdCategorie', array());

        return parent::getIdCategorie();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdSousCategorie($idSousCategorie)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdSousCategorie', array($idSousCategorie));

        return parent::setIdSousCategorie($idSousCategorie);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdSousCategorie()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdSousCategorie', array());

        return parent::getIdSousCategorie();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdThreads($idThreads)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdThreads', array($idThreads));

        return parent::setIdThreads($idThreads);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdThreads()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdThreads', array());

        return parent::getIdThreads();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdAnswer($idAnswer)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdAnswer', array($idAnswer));

        return parent::setIdAnswer($idAnswer);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdAnswer()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdAnswer', array());

        return parent::getIdAnswer();
    }

}