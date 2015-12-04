<?php

namespace Fr\ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Fr\ForumBundle\Entity\CommentaireRepository")
 */
class Commentaire
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
     * @ORM\Column(name="author", type="string", length=255)
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="idCategorie", type="integer", nullable=true)
     */
    private $idCategorie;

    /**
     * @var integer
     *
     * @ORM\Column(name="idSousCategorie", type="integer", nullable=true)
     */
    private $idSousCategorie;

    /**
     * @var integer
     *
     * @ORM\Column(name="idThreads", type="integer", nullable=true)
     */
    private $idThreads;

    /**
     * @var integer
     *
     * @ORM\Column(name="idAnswer", type="integer")
     */
    private $idAnswer;


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
     * Set author
     *
     * @param string $author
     * @return Commentaire
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Commentaire
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Commentaire
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Commentaire
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set idCategorie
     *
     * @param integer $idCategorie
     * @return Commentaire
     */
    public function setIdCategorie($idCategorie)
    {
        $this->idCategorie = $idCategorie;

        return $this;
    }

    /**
     * Get idCategorie
     *
     * @return integer 
     */
    public function getIdCategorie()
    {
        return $this->idCategorie;
    }

    /**
     * Set idSousCategorie
     *
     * @param integer $idSousCategorie
     * @return Commentaire
     */
    public function setIdSousCategorie($idSousCategorie)
    {
        $this->idSousCategorie = $idSousCategorie;

        return $this;
    }

    /**
     * Get idSousCategorie
     *
     * @return integer 
     */
    public function getIdSousCategorie()
    {
        return $this->idSousCategorie;
    }

    /**
     * Set idThreads
     *
     * @param integer $idThreads
     * @return Commentaire
     */
    public function setIdThreads($idThreads)
    {
        $this->idThreads = $idThreads;

        return $this;
    }

    /**
     * Get idThreads
     *
     * @return integer 
     */
    public function getIdThreads()
    {
        return $this->idThreads;
    }

    /**
     * Set idAnswer
     *
     * @param integer $idAnswer
     * @return Commentaire
     */
    public function setIdAnswer($idAnswer)
    {
        $this->idAnswer = $idAnswer;

        return $this;
    }

    /**
     * Get idAnswer
     *
     * @return integer 
     */
    public function getIdAnswer()
    {
        return $this->idAnswer;
    }
}
