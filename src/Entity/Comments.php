<?php
/**
 * Created by PhpStorm.
 * User: Damian
 * Date: 05.04.2018
 * Time: 18:12
 */

namespace Entity;


class Comments
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
     * @var string
     *
     * @Column(name="username", type="string", length=255)
     */
    private $username;
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
     * Get username
     *
     * @return integer
     */

    public function getUserName()
    {
        return $this->username;
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