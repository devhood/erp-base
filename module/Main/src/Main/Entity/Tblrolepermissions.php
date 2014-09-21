<?php

namespace Main\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblrolepermissions
 *
 * @ORM\Table(name="tblRolePermissions", indexes={@ORM\Index(name="fk_tblRolePermissions_roles1_idx", columns={"intRoleID"}), @ORM\Index(name="fk_tblRolePermissions_tblPermissions1_idx", columns={"intPermissionID"})})
 * @ORM\Entity
 */
class Tblrolepermissions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intRolePermissionID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $introlepermissionid;

    /**
     * @var \Main\Entity\Tblroles
     *
     * @ORM\ManyToOne(targetEntity="Main\Entity\Tblroles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intRoleID", referencedColumnName="intRoleID")
     * })
     */
    private $introleid;

    /**
     * @var \Main\Entity\Tblpermissions
     *
     * @ORM\ManyToOne(targetEntity="Main\Entity\Tblpermissions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intPermissionID", referencedColumnName="intPermissionID")
     * })
     */
    private $intpermissionid;



    /**
     * Get introlepermissionid
     *
     * @return integer 
     */
    public function getIntrolepermissionid()
    {
        return $this->introlepermissionid;
    }

    /**
     * Set introleid
     *
     * @param \Main\Entity\Tblroles $introleid
     * @return Tblrolepermissions
     */
    public function setIntroleid(\Main\Entity\Tblroles $introleid = null)
    {
        $this->introleid = $introleid;

        return $this;
    }

    /**
     * Get introleid
     *
     * @return \Main\Entity\Tblroles 
     */
    public function getIntroleid()
    {
        return $this->introleid;
    }

    /**
     * Set intpermissionid
     *
     * @param \Main\Entity\Tblpermissions $intpermissionid
     * @return Tblrolepermissions
     */
    public function setIntpermissionid(\Main\Entity\Tblpermissions $intpermissionid = null)
    {
        $this->intpermissionid = $intpermissionid;

        return $this;
    }

    /**
     * Get intpermissionid
     *
     * @return \Main\Entity\Tblpermissions 
     */
    public function getIntpermissionid()
    {
        return $this->intpermissionid;
    }
}
