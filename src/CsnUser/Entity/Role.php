<?php
/**
 * CsnUser - Coolcsn Zend Framework 2 User Module
 * 
 * @link https://github.com/coolcsn/CsnUser for the canonical source repository
 * @copyright Copyright (c) 2005-2013 LightSoft 2005 Ltd. Bulgaria
 * @license https://github.com/coolcsn/CsnUser/blob/master/LICENSE BSDLicense
 * @author Stoyan Cheresharov <stoyan@coolcsn.com>
 * @author Svetoslav Chonkov <svetoslav.chonkov@gmail.com>
 * @author Nikola Vasilev <niko7vasilev@gmail.com>
 * @author Stoyan Revov <st.revov@gmail.com>
 * @author Martin Briglia <martin@mgscreativa.com>
 */

namespace CsnUser\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Doctrine ORM implementation of Role entity
 *
 * @ORM\Entity
 * @ORM\Table(name="`role`")
 */
class Role
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=30, nullable=false, unique=true)
     */
    protected $name;
    
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=100, nullable=false)
     */
    protected $roleDescription;

    /**
     * @var Privilege
     * @ORM\OneToMany(targetEntity="CsnAuthorization\Entity\Privilege", mappedBy="role", cascade={"persist", "remove"}, orphanRemoval=true)
     */
    protected $privilege;
    
    /**
     * Construct
     * 
     * Construct some referenced columns arrays
     */
    public function __construct()
    {
        $this->privilege = new ArrayCollection;
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
     * Set name
     *
     * @param  string $name
     * @return Role
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
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
     * Set role description
     *
     * @param  string $roleDescription
     * @return Role
     */
    public function setRoleDescription($roleDescription)
    {
        $this->roleDescription = $roleDescription;
    
        return $this;
    }
    
    /**
     * Get role description
     *
     * @return string
     */
    public function getRoleDescription()
    {
        return $this->roleDescription;
    }
    
    /**
     * Set privilege
     *
     * @param  $privilege
     * @return Role
     */
    public function setPrivilege($privilege)
    {
        $this->privilege = $privilege;

        return $this;
    }
    
    /**
     * Get privilege
     *
     * @return Array
     */
    public function getPrivilege()
    {
        return $this->privilege;
    }
}
