<?php
/**
 * Created by PhpStorm.
 * User: Damian
 * Date: 27.03.2018
 * Time: 18:46
 */

namespace Entity;
use Entity\Users;
use Doctrine\ORM\Mapping as ORM;


class Posts
{
    /**
     * @var integer
     *
     * @Column(name="id", type="integer")
     * @Id
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @var integer
     *
     * @Column(name="userid", type="integer")
     * @ORM\OneToOne(targetEntity="Users")
     */
    private $userid;
    /**
     * @var string
     *
     * @Column(name="title", type="string", length=255)
     */
    private $title;
    /**
     * @var string
     *
     * @Column(name="password", type="string", length=255)
     */
    private $content;
    /**
     * @var string
     *
     * @Column(name="date", type="datetime")
     */
    private $date;


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
     * Get userid
     *
     * @return integer
     */

    public function getUserId()
    {
        return $this->userid;
    }
    /**
     * Set title
     *
     * @param string $title
     * @return string
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
     * @return string
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
     * @param string $date
     * @return string
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }
    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }
}