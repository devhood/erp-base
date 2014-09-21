<?php

namespace Main\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblroles
 *
 * @ORM\Table(name="tblRoles", uniqueConstraints={@ORM\UniqueConstraint(name="role_UNIQUE", columns={"strRole"})})
 * @ORM\Entity
 */
class Tblroles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intRoleID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $introleid;

    /**
     * @var string
     *
     * @ORM\Column(name="strRole", type="string", length=45, nullable=false)
     */
    private $strrole;



    /**
     * Get introleid
     *
     * @return integer 
     */
    public function getIntroleid()
    {
        return $this->introleid;
    }

    /**
     * Set strrole
     *
     * @param string $strrole
     * @return Tblroles
     */
    public function setStrrole($strrole)
    {
        $this->strrole = $strrole;

        return $this;
    }

    /**
     * Get strrole
     *
     * @return string 
     */
    public function getStrrole()
    {
        return $this->strrole;
    }
}
