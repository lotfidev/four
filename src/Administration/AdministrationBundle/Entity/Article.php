<?php

namespace Administration\AdministrationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="Administration\AdministrationBundle\Repository\ArticleRepository")
 */
class Article
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="Administration\AdministrationBundle\Entity\Media", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $image;


    /**
     * @ORM\ManyToMany(targetEntity="Administration\AdministrationBundle\Entity\Theme", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false,onDelete="CASCADE")
     */
    private $theme;

    /**
     * @ORM\ManyToOne(targetEntity="Administration\AdministrationBundle\Entity\Topic", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false,onDelete="CASCADE")
     */
    private $topic;

    /**
     * @ORM\ManyToOne(targetEntity="Administration\AdministrationBundle\Entity\Langue", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false, onDelete="CASCADE")
     */
    private $langue;

    /**
     * @ORM\ManyToOne(targetEntity="Client\ClientBundle\Entity\Client", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false,onDelete="CASCADE")
     */
    private $auteur;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_article", type="string", length=255)
     */
    private $nomArticle;

    /**
     * @var string
     *
     * @ORM\Column(name="description_article", type="text")
     */
    private $descriptionArticle;

    /**
     * @var string
     *
     * @ORM\Column(name="statut_article", type="string", length=255)
     */
    private $statutArticle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_article", type="datetime")
     */
    private $dateArticle;


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
     * Set nomArticle
     *
     * @param string $nomArticle
     * @return Article
     */
    public function setNomArticle($nomArticle)
    {
        $this->nomArticle = $nomArticle;

        return $this;
    }

    /**
     * Get nomArticle
     *
     * @return string
     */
    public function getNomArticle()
    {
        return $this->nomArticle;
    }

    /**
     * Set descriptionArticle
     *
     * @param string $descriptionArticle
     * @return Article
     */
    public function setDescriptionArticle($descriptionArticle)
    {
        $this->descriptionArticle = $descriptionArticle;

        return $this;
    }

    /**
     * Get descriptionArticle
     *
     * @return string
     */
    public function getDescriptionArticle()
    {
        return $this->descriptionArticle;
    }

    /**
     * Set dateArticle
     *
     * @param \DateTime $dateArticle
     * @return Article
     */
    public function setDateArticle($dateArticle)
    {
        $this->dateArticle = $dateArticle;

        return $this;
    }

    /**
     * Get dateArticle
     *
     * @return \DateTime
     */
    public function getDateArticle()
    {
        return $this->dateArticle;
    }


    /**
     * Set langue
     *
     * @param \Administration\AdministrationBundle\Entity\Langue $langue
     * @return Article
     */
    public function setLangue(\Administration\AdministrationBundle\Entity\Langue $langue)
    {
        $this->langue = $langue;

        return $this;
    }

    /**
     * Get langue
     *
     * @return \Administration\AdministrationBundle\Entity\Langue
     */
    public function getLangue()
    {
        return $this->langue;
    }



    /**
     * Set statutArticle
     *
     * @param string $statutArticle
     * @return Article
     */
    public function setStatutArticle($statutArticle)
    {
        $this->statutArticle = $statutArticle;

        return $this;
    }

    /**
     * Get statutArticle
     *
     * @return string
     */
    public function getStatutArticle()
    {
        return $this->statutArticle;
    }


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->theme = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add theme
     *
     * @param \Administration\AdministrationBundle\Entity\Theme $theme
     * @return Article
     */
    public function addTheme(\Administration\AdministrationBundle\Entity\Theme $theme)
    {
        $this->theme[] = $theme;

        return $this;
    }

    /**
     * Remove theme
     *
     * @param \Administration\AdministrationBundle\Entity\Theme $theme
     */
    public function removeTheme(\Administration\AdministrationBundle\Entity\Theme $theme)
    {
        $this->theme->removeElement($theme);
    }

    /**
     * Get theme
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTheme()
    {
        return $this->theme;
    }


    /**
     * Set topic
     *
     * @param \Administration\AdministrationBundle\Entity\Topic $topic
     * @return Article
     */
    public function setTopic(\Administration\AdministrationBundle\Entity\Topic $topic)
    {
        $this->topic = $topic;

        return $this;
    }

    /**
     * Get topic
     *
     * @return \Administration\AdministrationBundle\Entity\Topic
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Set auteur
     *
     * @param \Client\ClientBundle\Entity\Client $auteur
     * @return Article
     */
    public function setAuteur(\Client\ClientBundle\Entity\Client $auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return \Client\ClientBundle\Entity\Client
     */
    public function getAuteur()
    {
        return $this->auteur;
    }



    /**
     * Set image
     *
     * @param \Administration\AdministrationBundle\Entity\Media $image
     *
     * @return Article
     */
    public function setImage(\Administration\AdministrationBundle\Entity\Media $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \Administration\AdministrationBundle\Entity\Media
     */
    public function getImage()
    {
        return $this->image;
    }
}
