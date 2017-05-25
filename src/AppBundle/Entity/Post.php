<?php
// src/AppBundle/Entity/Post.php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
 */
class Post
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=255, unique=false)
     * @Assert\NotBlank()
     */
    private $name;
    /**
     * @ORM\Column(type="string", length=255, unique=false)
     * @Assert\NotBlank()
     */
    private $description;
    /**
     * @Assert\NotBlank()
     */
    private $duedate;
    /**
     * @ORM\Column(type="integer", length=255, unique=false)
     */
    private $userid;
    /**
     * @ORM\Column(type="integer", length=255, unique=false)
     */
    private $state;
    /**
     * Set name
     *
     * @param string $name
     *
     * @return Post
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Set description
     *
     * @param string $description
     *
     * @return Post
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Set duedate
     *
     * @param string $duedate
     *
     * @return Post
     */
    public function setDuedate($duedate)
    {
        $this->duedate = $duedate;
        return $this;
    }
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
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Get duedate
     *
     * @return string
     */
    public function getDuedate()
    {
        return $this->duedate;
    }
    /**
     * Set userid
     *
     * @param integer $userid
     *
     * @return Post
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;
        return $this;
    }
    /**
     * Get userid
     *
     * @return integer
     */
    public function getUserid()
    {
        return $this->userid;
    }
    /**
     * Set state
     *
     * @param integer $state
     *
     * @return Post
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }
    /**
     * Get state
     *
     * @return integer
     */
    public function getState()
    {
        return $this->state;
    }
}
