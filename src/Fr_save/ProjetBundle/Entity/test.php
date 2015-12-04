<?php

namespace Fr\ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * test
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Fr\ProjetBundle\Entity\testRepository")
 */
class test
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="texttest", type="string", length=255)
     */
    private $texttest;
    
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
     * Set texttest
     *
     * @param string $texttest
     * @return test
     */
    public function setTexttest($texttest)
    {
        $this->texttest = $texttest;

        return $this;
    }

    /**
     * Get texttest
     *
     * @return string 
     */
    public function getTexttest()
    {
        return $this->texttest;
    }
}
