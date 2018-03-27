<?php
/**
 * Created by PhpStorm.
 * User: Damian
 * Date: 27.03.2018
 * Time: 18:33
 */

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**Users
*
*@Entity
*@Tables(name="users")
*/

class Users
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
    private $password;
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
     * Set title
     *
     * @param string $username
     * @return Menu
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }
    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set title
     *
     * @param string $password
     * @return Menu
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
}